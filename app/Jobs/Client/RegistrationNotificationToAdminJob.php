<?php

namespace App\Jobs\Client;

use App\Models\User;
use App\Notifications\Client\RegistrationNotificationToAdmin;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Notification;

class RegistrationNotificationToAdminJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $clientData;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($clientData)
    {
        $this->clientData = $clientData;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = User::whereHas('role', function ($query) {
            $query->where('name', 'admin');
        })->value('email');

        $clientData = $this->clientData;
        

        Notification::route('mail', $email)
            ->notify(new RegistrationNotificationToAdmin($clientData));
    }
}
