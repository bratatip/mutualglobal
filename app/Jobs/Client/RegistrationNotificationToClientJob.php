<?php

namespace App\Jobs\Client;

use App\Notifications\Client\RegistrationNotificationToClient;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Notification;

class RegistrationNotificationToClientJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $email;
    protected $name;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email , $name)
    {
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = $this->email;
        $name = $this->name;
        

        Notification::route('mail', $email)
            ->notify(new RegistrationNotificationToClient($email, $name));
    }
}
