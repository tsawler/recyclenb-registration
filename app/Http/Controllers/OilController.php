<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

class OilController extends Controller {

    public function postOil() {
        //return "Display confirmation screen here...";

        dd(Input::all());
    }
}

