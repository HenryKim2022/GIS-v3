<?php

namespace App\Http\Controllers\UserPanels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanelController extends Controller
{

    public function index(){
        return view('userpanels/layouts/v_main');
    }


}
