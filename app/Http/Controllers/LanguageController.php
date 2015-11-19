<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Routing\Controller;

/**
 * Class VcmsLanguageController
 * @package Tsawler\Vcms5\controllers
 */
class LanguageController extends Controller {

    /**
     * Change language
     *
     * @return mixed
     */
    public function getChangeLanguage()
    {
        Session::put('lang', Input::get('lang'));
        App::setLocale(Input::get('lang'));

        return Redirect::to(Input::get('url'));
    }

}
