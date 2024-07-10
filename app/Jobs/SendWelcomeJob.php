<?php

namespace App\Jobs;

use App\Mail\AdCreated;
use App\Models\Ad;
use App\Models\User;
use App\Notifications\AdCreated as NotificationsAdCreated;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class SendWelcomeJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $ad;

    /**
     * Create a new job instance.
     */
    public function __construct(Ad $ad)
    {
        $this->ad = $ad;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to("filipkostanic@gmail.com")->send(new AdCreated($this->ad));
        Notification::send(User::find(1), new NotificationsAdCreated($this->ad));
    }

    public function failed()
    {

    }

}
