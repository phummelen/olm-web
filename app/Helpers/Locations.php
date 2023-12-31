<?php

namespace App\Helpers;

use App\Helpers\Get\LoadDataHelper;

class Locations
{
    /**
     * Get the data for a Country, State, or City by id
     *
     * @return array|string
     */
    public static function getLocation($locationId, $locationType)
    {
        if ($locationType === 'country') {
            return LoadDataHelper::getStates($locationId);
        } elseif ($locationType === 'state') {
            return LoadDataHelper::getCities($country = null, $locationId);
        } else {
            return 'no location type';
        }
    }
}
