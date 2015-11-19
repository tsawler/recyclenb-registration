<?php
namespace App\Http\Controllers;

use App\BrandRegistration;
use App\BrandRegistrationOfficer;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class AdminOilController extends Controller {

    public function allRegistrations()
    {

        $allregistrations = BrandRegistration::orderBy('name_of_applicant')->get();

        return View::make('vcms5::admin.all-brand-registrations')
            ->with('allregistrations', $allregistrations);

    }


    public function getRegistration()
    {
        $registration = BrandRegistration::findOrFail(Input::get('id'));
        $officers = BrandRegistrationOfficer::where('brand_registration_id', '=', Input::get('id'))->get();

        return View::make('vcms5::admin.brand-registration')
            ->with('registration', $registration)
            ->with('officers', $officers);
    }

    public function deleteOfficer()
    {
        $registration_id = Input::get('rid');
        $officer_id = Input::get('id');
        BrandRegistrationOfficer::find($officer_id)->delete();

        return Redirect::to('/admin/registrations/registration?id=' . $registration_id)
            ->with('message', 'Officer deleted');
    }
}

