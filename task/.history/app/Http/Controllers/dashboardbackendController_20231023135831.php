<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class dashboardbackendController extends Controller
{
    //
    public function productlist(){


        $products = Dashboard::all();
        return view('productlist');


    }
}
