<?php

namespace App\Notifications\Client;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RegistrationNotificationToAdmin extends Notification
{
    use Queueable;
    protected $clientData;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($clientData)
    {
        $this->clientData = $clientData;
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
        $appUrl = config('app.url');
        $mail_logo = public_path('images/mail_logo.png');
        $subject = "A Client has been register!";

        $clientData = $this->clientData;
        
        return (new MailMessage)
            ->subject($subject)
            ->view('emails.client_registration_to_admin', [
                'clientData' => $clientData,
                'appUrl' => $appUrl,
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
