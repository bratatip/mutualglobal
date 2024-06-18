<?php

namespace App\Notifications\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RegistrationNotificationToUser extends Notification
{
    use Queueable;
    protected $name;
    protected $email;
    protected $password;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($email, $name, $password)
    {
        $this -> email = $email;
        $this -> name = $name;
        $this->password = $password;
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
        $subject = "Welcome to Mutual Global Insurance Broking Pvt Ltd!";

        $name = $this->name;
        $email = $this->email;
        $password = $this->password;
        return (new MailMessage)
        ->subject($subject)
            ->view('emails.registration', [
            'name' => $name,
            'userEmail' => $email,
            'userPassword' => $password,
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
