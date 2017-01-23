<?php
namespace App\Http\Controllers;

use App\BrandRegistration;
use App\BrandRegistrationOfficer;
use App\ElectronicsNumber;
use App\OilNumber;
use App\PaintNumber;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class OilController extends Controller {

    public function postOil() {

        $registration = new BrandRegistration;
        $registration->fill(Input::all());
        $registration->ip_address = Request::getClientIp();

        if (Input::has('late_registration')){
            if (Input::get('late_registration') == 1)
                $registration->ack = 1;
            else
                $registration->ack = 0;
        }

        $registration->save();
        $registration_id = $registration->id;

        // save and get reg number
        switch (Input::get('type')) {

            case 1:
                // oil
                $OilNumber = new OilNumber();
                $OilNumber->brand_registration_id = $registration_id;
                $OilNumber->save();
                break;

            case 2:
                // paint
                $PaintNumber = new PaintNumber();
                $PaintNumber->brand_registration_id = $registration_id;
                $PaintNumber->save();
                break;

            case 3:
                // electronics
                $ElectronicsNumber = new ElectronicsNumber();
                $ElectronicsNumber->brand_registration_id = $registration_id;
                $ElectronicsNumber->save();
                break;

            default:
                // do nothing
        }

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

        $industry = ['','Oil and Glycol','Paint','Electronics'];

        $data = array(
            'company'       => Input::get('name_of_applicant'),
            'brand'  => $industry[Input::get('type')]
        );

        // send mail
        Mail::send('emails.registration-notification-brand', $data, function ($m) {
            $m->from('donotreply@recyclenb.com', 'Registration');
            $m->to('info@recyclenb.com')->subject('Online registration form completed');
        });

        return Redirect::to('/confirmation');

    }
}

