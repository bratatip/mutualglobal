<?php

namespace App\Http\Controllers\Coupon;

use App\Helpers\UuidGeneratorHelper;
use App\Http\Controllers\Controller;
use App\Jobs\HealthCoupon\CouponGeneratedNotificationJob;
use App\Models\Area;
use App\Models\City;
use App\Models\Coupon\HealthCoupon;
use App\Models\Discount;
use App\Models\Hospital;
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
            'locality' => 'required|string|min:5|max:100|regex:/^[A-Za-z0-9(), -]+$/',
            'city' => 'required|string',
            'area' => 'required|string',
            'hospital' => 'required|string',
            'terms&conditions' => 'required|accepted',
        ], [
            'locality.regex' => 'only use [ A-Z, a-z, 0-9, (), - , comma ].',
            'terms&conditions.required' => 'Please accept the terms and conditions.',
            'terms&conditions.accepted' => 'Please accept the terms and conditions.',
        ]);


        $cityName = City::where('id',$validatedData['city'])->value('name');
        $areaName = Area::where('id',$validatedData['area'])->value('name');
        $hospitalInfo = Hospital::where('id',$validatedData['hospital'])->value('name');
        $discount = Discount::where('hospital_id', $validatedData['hospital'])->first();
        
        $data = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'contact_no' => $validatedData['contact_no'],
            'locality' => $validatedData['locality'],
            'city' => $cityName,
            'area' => $areaName,
            'hospital' => $hospitalInfo,
            'current_date' => now()->toDateString(),
        ];

        $pdf = PDF::loadView('health-coupon.frontend.coupon', [
            'data' => $data,
            'discount' => $discount,
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
            'hospital_id' => $validatedData['hospital'],
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
