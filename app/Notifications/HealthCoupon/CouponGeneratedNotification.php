<?php

namespace App\Notifications\HealthCoupon;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CouponGeneratedNotification extends Notification
{
    use Queueable;
    protected $data;
    protected $filePath;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data, $filePath)
    {
        $this->data = $data;
        $this->filePath = $filePath;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $data = $this-> data;

        $filePath = $this->filePath;
        $pdfFileName = pathinfo($filePath, PATHINFO_BASENAME);

        $subject = "Welcome to Mutual Global Insurance Broking Pvt Ltd!";

        return (new MailMessage)
            ->subject($subject)
            ->view('health-coupon.emails.mail_coupon_generate', [
                'data' => $data,
            ])
            ->attach(storage_path('app/' . $filePath), [
                'as' => $pdfFileName,
                'mime' => 'application/pdf',
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
