<?php

namespace App\Http\Controllers\Coupon;

use App\Http\Controllers\Controller;
use App\Jobs\HealthCoupon\CouponGeneratedNotificationJob;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientCouponController extends Controller
{
    public function couponIndex()
    {
        return view('health-coupon.frontend.index');
    }

    public function GetCouponIndex(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'contact_no' => 'required|string|min:10|max:10|regex:/^[0-9]+$/',
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

        Storage::put($filePath, $pdf->output());

        if ($pdf) {
            dispatch(new CouponGeneratedNotificationJob($data, $filePath));
        }

        return $pdf->download($fileName);
    }
}
