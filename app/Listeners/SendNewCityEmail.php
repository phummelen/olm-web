<?php

namespace App\Listeners;

use App\Events\NewCityAdded;

class SendNewCityEmail
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
     * @return void
     */
    public function handle(NewCityAdded $event)
    {
        //
    }
}
