<?php

namespace App\Listeners\AddLocation;

use App\Events\NewStateAdded;
use App\Models\Location\Country;
use App\Models\Location\State;

class UpdateStatesTable
{
    /**
     * Handle the event.
     *
     * @return void
     */
    public function handle(NewStateAdded $event)
    {
        $country_id = Country::where('country', $event->country)
            ->orWhere('countrynameb', $event->country)
            ->orWhere('countrynamec', $event->country)
            ->first()->id;

        $state = State::create([
            'state' => $event->state,
            'country_id' => $country_id,
            'created_by' => $event->userId,
        ]);

        $state->save();
    }
}
