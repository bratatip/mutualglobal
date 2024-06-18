<?php

namespace App\Notifications\Client;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RegistrationNotificationToClient extends Notification
{
    use Queueable;
    protected $name;
    protected $email;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($email, $name)
    {
        $this -> email = $email;
        $this -> name = $name;
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
        $subject = "Registration Success!";

        $name = $this->name;
        $email = $this->email;
        return (new MailMessage)
        ->subject($subject)
            ->view('emails.client_registration', [
            'name' => $name,
            'userEmail' => $email,
            'appUrl' => $appUrl,
            'clientRegistration' => true,
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
