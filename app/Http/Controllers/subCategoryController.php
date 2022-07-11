<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class subCategoryController extends Controller
{
    public function index(){
        return view ('superadmin.subCategory');
    }
}
