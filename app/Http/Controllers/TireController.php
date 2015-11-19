<?php
namespace App\Http\Controllers;

use App\TireRegistration;
use App\TireRegistrationOfficer;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

class TireController extends Controller {

    public function postTire() {
        $registration = new TireRegistration;
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
                $officer = new TireRegistrationOfficer;
                $officer->tire_registration_id = $registration_id;
                $officer->officer_name = $officer_names[$id];
                $officer->officer_title = $officer_titles[$id];
                $officer->officer_address = $officer_addresses[$id];
                $officer->officer_province = $officer_provinces[$id];
                $officer->officer_zip = $officer_zips[$id];
                $officer->save();
            }
        }

        // send mail
        Mail::send('emails.registration-notification', [], function ($m) {
            $m->from('donotreply@recyclenb.com', 'REgistration');
            $m->to('info@recyclenb.com')->subject('Online registration form completed');
        });

        return Redirect::to('/confirmation');
    }
}

