<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App;
class Locale extends Controller
{
    // public function index($lang){
    //     return view('local');
    // }

    public function index($locale)
    {
        App::setLocale($locale);
        \Session()->put('locale', $locale);
        // echo "Hello". $locale;

        return view('auth.login');
        // return redirect()->back();
    }

}
