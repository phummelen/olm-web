<?php

namespace App\Listeners;

use App\Events\UserSignedUp;
use Illuminate\Support\Facades\Log;

class SendNewUserEmail
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
    public function handle(UserSignedUp $event)
    {
        Log::info('event handle - new user signed up');
    }
}
