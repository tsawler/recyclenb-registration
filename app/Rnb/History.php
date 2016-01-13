<?php

namespace App\Rnb;

use App\BrandRegisrationNote;
use App\BrandRegistrationHistory;
use App\TireRegistrationHistory;
use App\TireRegistrationNote;

/**
 * Class History
 * @package App\Rnb
 */
class History {

    /**
     * @param $brand_registration_id
     * @param string $history
     */
    public static function enterBrandHistory($brand_registration_id, $history = "")
    {
        // put entry into brand_registration_histories
        $activity = new BrandRegistrationHistory();
        $activity->brand_registration_id = $brand_registration_id;
        $activity->history = $history;
        $activity->user_name = Auth::user()->first_name . " " . Auth::user()->last_name;
        $activity->save();
    }


    /**
     * @param $tire_registration_id
     * @param string $history
     */
    public static function enterTireHistory($tire_registration_id, $history = "")
    {
        // put entry into tire_registration_histories
        $activity = new TireRegistrationHistory();
        $activity->tire_registration_id = $tire_registration_id;
        $activity->history = $history;
        $activity->user_name = Auth::user()->first_name . " " . Auth::user()->last_name;
        $activity->save();
    }


    /**
     * @param $brand_registration_id
     * @param string $notes
     */
    public static function enterBrandNotes($brand_registration_id, $notes = "")
    {
        // put entry into brand_registration_notes
        $activity = new BrandRegisrationNote();
        $activity->brand_registration_id = $brand_registration_id;
        $activity->notes = $notes;
        $activity->user_name = Auth::user()->first_name . " " . Auth::user()->last_name;
        $activity->save();
    }


    /**
     * @param $tire_registration_id
     * @param string $notes
     */
    public static function enterTireNotes($tire_registration_id, $notes = "")
    {
        // put entry into tire_registration_notes
        $activity = new TireRegistrationNote();
        $activity->tire_registration_id = $tire_registration_id;
        $activity->notes = $notes;
        $activity->user_name = Auth::user()->first_name . " " . Auth::user()->last_name;
        $activity->save();
    }


}
