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

        return Redirect::to('/admin/registrations/registration?tab=officers&id=' . $registration_id)
            ->with('message', 'Officer deleted');
    }


    /**
     * @return mixed
     */
    public function postRegistration()
    {
        $id = 0;
        if (Input::get('id') > 0) {
            $registration = BrandRegistration::find(Input::get('id'));
            $registration->fill(Input::all());
            $registration->save();
            $id = Input::get('id');
        } else {
            $registration = new BrandRegistration();
            $registration->fill(Input::all());
            $registration->save();
            $id = $registration->id;
        }

        if (Input::get('action') == 1) {
            return Redirect::to('/admin/registrations/registration?id=' . $id);
        } else {
            return Redirect::to('/admin/registrations/all-brand-registrations');
        }

    }



    /**
     * @return mixed
     */
    public function updateOfficers()
    {

        foreach (Input::all() as $name => $value) {
            if (starts_with($name, "officerid_")) {
                $id = $value;
                $officer = BrandRegistrationOfficer::find($id);
                $officer->officer_name = Input::get('officer_name_' . $id);
                $officer->officer_title = Input::get('officer_title_' . $id);
                $officer->officer_address = Input::get('officer_address_' . $id);
                $officer->officer_province = Input::get('officer_province_' . $id);
                $officer->officer_zip = Input::get('officer_zip_' . $id);
                $officer->save();
            }
        }

        // check for new officer
        if (strlen(Input::get('officer_name_0')) > 0) {
            $officer = new BrandRegistrationOfficer();
            $officer->officer_name = Input::get('officer_name_0');
            $officer->officer_title = Input::get('officer_title_0');
            $officer->officer_address = Input::get('officer_address_0');
            $officer->officer_province = Input::get('officer_province_0');
            $officer->officer_zip = Input::get('officer_zip_0');
            $officer->brand_registration_id = Input::get('id');
            $officer->save();
        }

        if (Input::get('action') == 1) {
            return Redirect::to('/admin/registrations/registration?id=' . Input::get('id') . "&tab=officers");
        } else {
            return Redirect::to('/admin/registrations/all-brand-registrations');
        }
    }
}

