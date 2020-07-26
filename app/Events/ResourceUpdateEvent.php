<?php

namespace App\Events;

use App\Models\Externals;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ResourceUpdateEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $resource;

    /**
     * Create a new event instance.
     *
     * @param Externals $resource
     */
    public function __construct(Externals $resource)
    {
        $this->resource = $resource;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
