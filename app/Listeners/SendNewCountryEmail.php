<?php

namespace App\Listeners;

use App\Events\NewCountryAdded;

class SendNewCountryEmail
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
    public function handle(NewCountryAdded $event)
    {
        //
    }
}
