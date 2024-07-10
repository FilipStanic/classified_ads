<?php

namespace App\Listeners;

use App\Events\AdCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendNewAdNotificationListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AdCreated $event): void
    {
        $ad = $event->ad;

        Log::info('New ad created: ' . print_r(json_encode($ad), true));


    }
}
