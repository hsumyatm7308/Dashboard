<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserprofileController extends Controller
{
    //

    public function index(){
        return view('userprofile.edit');
    }
}
