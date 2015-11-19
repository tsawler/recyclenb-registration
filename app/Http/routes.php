<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
    return view('index');
});


Route::post('/', function() {

    $type = Input::get('r');

    switch ($type) {

        case 1 :
            $title = "Oil and Glycol Program";
            $title_fr = "Oil and Glycol Program";
            return View::make('oil')
                ->with('title', $title)
                ->with('title_fr', $title_fr)
                ->with('type', $type);
            break;

        case 2 :
            $title = "Paint Program";
            $title_fr = "Paint Program";
            return View::make('oil')
                ->with('title', $title)
                ->with('title_fr', $title_fr)
                ->with('type', $type);
            break;

        case 3 :
            $title = "Electronics Program";
            $title_fr = "Electroics Program";
            return View::make('oil')
            ->with('title', $title)
            ->with('title_fr', $title_fr)
            ->with('type', $type);
            break;

        case 4 :
            return View::make('tires');
            break;

    }
});

Route::get('/brand-registration/{type}', function () {
    return view('oil');
});

Route::post('/brand-registration/{type}', 'OilController@postOil');


Route::get('/tire-program', function () {
    return view('tires');
});

Route::post('/tire-program', 'TireController@postTire');
