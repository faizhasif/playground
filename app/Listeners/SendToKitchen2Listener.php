<?php

namespace App\Listeners;

use App\Events\SendToKitchen2Event;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;

class SendToKitchen2Listener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SendToKitchen2Event  $event
     * @return void
     */
    public function handle(SendToKitchen2Event $event)
    {
        $now = Carbon::now();
        Log::info("[{$now}] Item {$event->item->name} sent to kitchen-02");
    }
}
