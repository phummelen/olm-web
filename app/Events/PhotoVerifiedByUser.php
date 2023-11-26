<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PhotoVerifiedByUser implements ShouldBroadcast
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    // only public properties will be broadcasted
    public $photoId;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($photoId)
    {
        $this->photoId = $photoId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        // return PresenceChannel('my-channel');
        // return new PrivateChannel('my-channel');
        return ['my-channel'];
    }
}
