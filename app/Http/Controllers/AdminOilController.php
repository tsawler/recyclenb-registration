<?php
namespace App\Http\Controllers;

use App\BrandRegistration;
use App\BrandRegistrationOfficer;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

/**
 * Class AdminOilController
 * @package App\Http\Controllers
 */
class AdminOilController extends Controller {

    /**
     * @return mixed
     */
    public function allRegistrations()
    {

        $allregistrations = BrandRegistration::orderBy('name_of_applicant')->get();

        return View::make('vcms5::admin.all-brand-registrations')
            ->with('allregistrations', $allregistrations);

    }


    /**
     * @return mixed
     */
    public function getRegistration()
    {

        if (Input::get('id') > 0) {
            $registration = BrandRegistration::findOrFail(Input::get('id'));
            $officers = BrandRegistrationOfficer::where('brand_registration_id', '=', Input::get('id'))->get();
        } else {
            $registration = new BrandRegistration();
            $officers = [];
        }

        return View::make('vcms5::admin.brand-registration')
            ->with('registration', $registration)
            ->with('officers', $officers);
    }


    /**
     * @return mixed
     */
    public function deleteOfficer()
    {
        $registration_id = Input::get('rid');
        $officer_id = Input::get('id');
        BrandRegistrationOfficer::find($officer_id)->delete();

        return Redirect::to('/admin/registrations/registration?id=' . $registration_id)
            ->with('message', 'Officer deleted');
    }


    /**
     * @return mixed
     */
    public function postRegistration()
    {
        if (Input::get('id') > 0) {
            $registration = BrandRegistration::find(Input::get('id'));
            $registration->fill(Input::all());
            //$registration->ip_address = Request::getClientIp();
            $registration->save();
        }

        if (Input::get('action') == 1) {
            return Redirect::to('/admin/registrations/registration?id=' . Input::get('id'));
        } else {
            return Redirect::to('/admin/registrations/all-brand-registrations');
        }

    }


    public function updateOfficers()
    {
        if (Input::get('action') == 1) {
            return Redirect::to('/admin/registrations/registration?id=' . Input::get('id') . "&tab=officers");
        } else {
            return Redirect::to('/admin/registrations/all-brand-registrations');
        }
    }
}

