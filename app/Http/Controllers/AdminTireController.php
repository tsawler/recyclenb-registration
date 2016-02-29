<?php
namespace App\Http\Controllers;

use App\BrandRegistration;
use App\BrandRegistrationOfficer;
use App\TireRegistration;
use App\TireRegistrationOfficer;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use App\Rnb\History;

/**
 * Class AdminOilController
 * @package App\Http\Controllers
 */
class AdminTireController extends Controller {

    /**
     * @return mixed
     */
    public function allRegistrations()
    {

        $allregistrations = TireRegistration::orderBy('name_of_applicant')->get();

        return View::make('vcms5::admin.all-tire-registrations')
            ->with('allregistrations', $allregistrations);

    }


    /**
     * @return mixed
     */
    public function getRegistration()
    {

        if (Input::get('id') > 0) {
            $registration = TireRegistration::findOrFail(Input::get('id'));
            $officers = TireRegistrationOfficer::where('tire_registration_id', '=', Input::get('id'))->get();
        } else {
            $registration = new BrandRegistration();
            $officers = [];
        }

        return View::make('vcms5::admin.tire-registration')
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
        TireRegistrationOfficer::find($officer_id)->delete();

        return Redirect::to('/admin/registrations/tire-registration?tab=officers&id=' . $registration_id)
            ->with('message', 'Officer deleted');
    }


    /**
     * @return mixed
     */
    public function postRegistration()
    {
        $id = 0;
        if (Input::get('id') > 0) {
            $registration = TireRegistration::find(Input::get('id'));
            $registration->fill(Input::all());
            $registration->save();
            $id = Input::get('id');
        } else {
            $registration = new TireRegistration();
            $registration->fill(Input::all());
            $registration->save();
            $id = $registration->id;
        }

        History::enterTireHistory($registration->id, "Form updated with new information");

        if (Input::get('action') == 1) {
            return Redirect::to('/admin/registrations/tire-registration?id=' . $id);
        } else {
            return Redirect::to('/admin/registrations/all-tire-registrations');
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
                $officer = TireRegistrationOfficer::find($id);
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
            $officer = new TireRegistrationOfficer();
            $officer->officer_name = Input::get('officer_name_0');
            $officer->officer_title = Input::get('officer_title_0');
            $officer->officer_address = Input::get('officer_address_0');
            $officer->officer_province = Input::get('officer_province_0');
            $officer->officer_zip = Input::get('officer_zip_0');
            $officer->brand_registration_id = Input::get('id');
            $officer->save();
        }

        if (Input::get('action') == 1) {
            return Redirect::to('/admin/registrations/tire-registration?id=' . Input::get('id') . "&tab=officers");
        } else {
            return Redirect::to('/admin/registrations/all-brand-registrations');
        }
    }


    public function printPDF()
    {
        $id = Input::get('id');
        $yn = ['No', 'Yes'];
        $remit = [
            0 => '',
            1 => 'Remit to RNB',
            2 => 'Remit through head office',
            3 => 'Remit through supplier',
        ];

        $type = [
            0 => '',
            1 => 'Tire Retailer',
            2 => 'Car Dealer',
            3 => 'Solid Waste Commission',
            4 => 'Garage',
            5 => 'Trucking Company',
            6 => 'Towing Company',
            7 => 'Salvage Yard',
            8 => 'Other',
        ];

        // look up registration
        $registration = TireRegistration::find($id);

        $pdf = new \fpdi\FPDI();
        $pdf->AddPage();
        $pdf->setSourceFile(base_path() . "/resources/templates/letterhead.pdf");
        $tplIdx = $pdf->importPage(1);
        $pdf->useTemplate($tplIdx, 0, 0, 0, 0, true);
        $pdf->SetMargins(25, 24, 25);
        $pdf->SetAutoPageBreak(true, 28);
        $pdf->setY(45.5);
        $pdf->setX(25);

        $pdf->SetFont('Helvetica','B');
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252','Registrant Information'));
        $pdf->Ln();
        $pdf->SetFont('Helvetica','');

        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252','Registrant: ' . $registration->name_of_applicant));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252','Registration Type: Tire'));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252','Registration Number: ' . $registration->id));
        $pdf->Ln();
        $pdf->Ln();

        $pdf->SetFont('Helvetica','B');
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252','Remittance and Operation Type'));
        $pdf->Ln();
        $pdf->SetFont('Helvetica','');

        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252','Remittance: ' . $remit[$registration->remittance]));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252','Registration Type: ' . $type[$registration->type_of_company]));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252','Sells Tires: ' . $yn[$registration->sell_tires]));
        $pdf->Ln();
        $pdf->Ln();


        $pdf->SetFont('Helvetica','B');
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252','Address and Location of Head Office'));
        $pdf->Ln();
        $pdf->SetFont('Helvetica','');

        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Physical Location: ' . $registration->head_physical_location));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Mailing Address: ' . $registration->head_mailing_address));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Province/State: ' . $registration->head_province_state));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Postal/Zip: ' . $registration->head_zip));
        $pdf->Ln();
        $pdf->Ln();

        $pdf->SetFont('Helvetica','B');
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252','Address and Location of Main Place of Business in NB'));
        $pdf->Ln();
        $pdf->SetFont('Helvetica','');
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'NB Location: ' . $registration->nb_physical_location));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'NB Mailing Address: ' . $registration->nb_mailing_address));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'NB Province/State: ' . $registration->nb_province_state));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'NB Postal/Zip: ' . $registration->nb_zip));
        $pdf->Ln();
        $pdf->Ln();

        $pdf->SetFont('Helvetica','B');
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252','Address and Location of Contact Person'));
        $pdf->Ln();
        $pdf->SetFont('Helvetica','');

        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Contact Name: ' . $registration->contact_name));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Contact Mailing Address: ' . $registration->contact_mailing_address));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Contact Province/State: ' . $registration->contact_province_state));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Contact Postal/Zip: ' . $registration->contact_zip));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Contact Email: ' . $registration->contact_email));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Contact Phone: ' . $registration->contact_phone));
        $pdf->Ln();
        $pdf->Ln();

        $pdf->SetFont('Helvetica','B');
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252','Agent acting on Behalf of Applicant'));
        $pdf->Ln();
        $pdf->SetFont('Helvetica','');

        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Agent Name: ' . $registration->agent_name));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Company Name: ' . $registration->agent_company_name));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Agent Mailing Address: ' . $registration->agent_mailing_address));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Agent Province/State: ' . $registration->agent_province_state));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Agent Postal/Zip: ' . $registration->agent_zip));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Agent Email: ' . $registration->agent_email));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Agent Phone: ' . $registration->agent_phone));
        $pdf->Ln();
        $pdf->Ln();

        if (count($registration->officers)) {
            $pdf->SetFont('Helvetica', 'B');
            $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Officers'));
            $pdf->Ln();
            $pdf->SetFont('Helvetica', '');

            foreach ($registration->officers as $officer) {
                $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Name: ' . $officer->officer_name));
                $pdf->Ln();
                $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Title: ' . $officer->officer_title));
                $pdf->Ln();
                $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Address: ' . $officer->officer_address));
                $pdf->Ln();
                $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Province/State: ' . $officer->officer_province));
                $pdf->Ln();
                $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Postal/Zip: ' . $officer->officer_zip));
                $pdf->Ln();
                $pdf->Ln();
            }
        }

        $pdf->SetFont('Helvetica','B');
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252','Signature'));
        $pdf->Ln();
        $pdf->SetFont('Helvetica','');

        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Signature: ' . $registration->signature));
        $pdf->Ln();
        $pdf->Cell(0, 5, iconv('UTF-8', 'windows-1252', 'Date: ' . $registration->created_at));


        $pdf->output('Tire registration ' . $registration->id . '.pdf', 'D');;

    }


    public function saveNote()
    {
        if (strlen(Input::get('note')) > 0)
            History::enterTireNotes(Input::get('brand_registration_id'), Input::get('note'));

        return Redirect::to("/admin/registrations/tire-registration?id=" . Input::get('brand_registration_id') . "&tab=notes");
    }
}

