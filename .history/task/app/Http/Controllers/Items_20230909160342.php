<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Items extends Controller
{
    //

    public function index(){
        $items = perfume::all();

        return view("index",['items',$items]);
    }
}
