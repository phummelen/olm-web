<?php

namespace App\Listeners\AddLocation;

use App\Events\NewCountryAdded;
use App\Models\Location\Country;

class UpdateCountriesTable
{
    /**
     * Handle the event.
     *
     * @return void
     */
    public function handle(NewCountryAdded $event)
    {
        $country = Country::firstOrCreate([
            'country' => $event->country,
            'shortcode' => $event->countryCode,
        ]);

        if ($country && is_null($country->created_by)) {
            $country->created_by = $event->userId;
            $country->save();
        }
    }
}
