<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sliderController extends Controller
{
    public function index(){
        return view ('superadmin.slider');
    }
}
