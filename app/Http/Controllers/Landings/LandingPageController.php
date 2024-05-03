<?php

namespace App\Http\Controllers\Landings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
    public function index(){
        return view('landings/v_landing_customizer');
    }
}
