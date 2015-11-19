<?php
namespace App\Http\Controllers;

use App\BrandRegistration;
use App\BrandRegistrationOfficer;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;

class OilController extends Controller {

    public function postOil() {

        $registration = new BrandRegistration;
        $registration->fill(Input::all());
        $registration->ip_address = Request::getClientIp();
        $registration->save();
        $registration_id = $registration->id;

        $officer_names = Input::get('officer_name');
        $officer_titles = Input::get("officer_title");
        $officer_addresses = Input::get("officer_address");
        $officer_provinces = Input::get("officer_province");
        $officer_zips = Input::get("officer_zip");


        foreach ($officer_names as $id => $value){
            if (($value != "") && ($value != null)) {
                $officer = new BrandRegistrationOfficer;
                $officer->brand_registration_id = $registration_id;
                $officer->officer_name = $officer_names[$id];
                $officer->officer_title = $officer_titles[$id];
                $officer->officer_address = $officer_addresses[$id];
                $officer->officer_province = $officer_provinces[$id];
                $officer->officer_zip = $officer_zips[$id];
                $officer->save();
            }
        }

        return "DOne";

    }
}

