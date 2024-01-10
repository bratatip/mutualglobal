<?php

namespace App\Http\Controllers\Coupon;

use App\Helpers\UuidGeneratorHelper;
use App\Http\Controllers\Controller;
use App\Jobs\HealthCoupon\CouponGeneratedNotificationJob;
use App\Models\Coupon\HealthCoupon;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ClientCouponController extends Controller
{
    public function couponIndex()
    {
        return view('health-coupon.frontend.index');
        // if ($pdf) {
        //     dispatch(new CouponGeneratedNotificationJob($data, $filePath));
        // }
    }

    public function GetCouponIndex(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'contact_no' => 'required|string|min:10|max:10|regex:/^[0-9]+$/',
            'locality' => 'required|string|min:10|max:50|regex:/^[A-Za-z ]+$/',
            'city' => 'required|string',
            'area' => 'required|string',
            'hospital' => 'required|string',
            'terms&conditions' => 'required|accepted',
        ], [
            'terms&conditions.required' => 'Please accept the terms and conditions.',
            'terms&conditions.accepted' => 'Please accept the terms and conditions.',
        ]);



        $data = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'contact_no' => $validatedData['contact_no'],
            'locality' => $validatedData['locality'],
            'city' => $validatedData['city'],
            'area' => $validatedData['area'],
            'hospital' => $validatedData['hospital'],
        ];

        $pdf = PDF::loadView('health-coupon.frontend.coupon', [
            'data' => $data,
        ]);



        $directory = 'health-coupon';
        $fileName = strtolower(str_replace(' ', '', $validatedData['name'])) . '.pdf';

        $filePath = "public/$directory/$fileName";
        try {
            DB::beginTransaction();

        Storage::put($filePath, $pdf->output());

        HealthCoupon::create([
            'uuid' => UuidGeneratorHelper::generateUniqueUuidForTable('health_coupons'),
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['contact_no'],
            'locality' => $validatedData['locality'],
            'hospital' => $validatedData['hospital'],
            'download_status' => 1, 
        ]);

        DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('PDF Generation Error: ' . $e->getMessage());
            
            return redirect()->back()->with(['error' => $e->getMessage()])->withInput();
        }

        return $pdf->download($fileName);
    }
}
