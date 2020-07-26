<?php

namespace App\Listeners;

use App\Models\Externals;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ResourceUpdateListener
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        if (isset($event) && $event->resource instanceof Externals) {
            $event->resource->last_checked = Carbon::now();
            $event->resource->save();
        }
    }
}
