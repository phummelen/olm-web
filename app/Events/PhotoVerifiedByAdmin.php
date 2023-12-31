<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PhotoVerifiedByAdmin
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

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
        return new PrivateChannel('channel-name');
    }
}
