<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Items extends Controller
{
    //

    public function index(){
        $items = Items::all();

        return view("index",['items',$items]);
    }
}
