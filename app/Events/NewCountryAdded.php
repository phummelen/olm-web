<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class NewCountryAdded implements ShouldBroadcast
{
    use InteractsWithSockets;
    use SerializesModels;

    public $country;

    public $countryCode;

    public $now;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($country, $countryCode, $now)
    {
        $this->country = $country;
        $this->countryCode = $countryCode;
        $this->now = $now;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('main');
    }
}
