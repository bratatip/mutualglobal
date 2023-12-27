<?php

namespace App\Jobs\HealthCoupon;

use App\Notifications\HealthCoupon\CouponGeneratedNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;

class CouponGeneratedNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $data;
    protected $filePath;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data, $filePath)
    {
        $this->data = $data;
        $this->filePath = $filePath;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = $this->data;

        $email = $data['email'];
        $filePath = $this->filePath;

        Notification::route('mail', $email)
            ->notify(new CouponGeneratedNotification($data, $filePath));


        $storagePath = public_path(Storage::url($filePath));

        if (is_file($storagePath)) {
            unlink($storagePath);
        }
    }
}
