<?php

namespace App\Http\Controllers;

use App\Models\AllProduct;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class dashboardbackendController extends Controller
{
    //
    public function productlist(){


        $products = AllProduct::all();
        return view('productlist');


    }
}
