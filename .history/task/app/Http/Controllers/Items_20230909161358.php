<?php

namespace App\Http\Controllers;

use App\Models\Itemsmodel;
use Illuminate\Http\Request;

class Items extends Controller
{
    //

    public function index()
    {
        $items = Itemsmodel::all(); 
    
        return view('index', ['items' => $items]);
    }
    
}
