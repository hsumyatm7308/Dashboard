<?php

namespace App\Http\Controllers;

use App\Models\Itemsmodel;
use Illuminate\Http\Request;

class Items extends Controller
{
    //

    public function index()
    {
        $items = YourModelName::all(); // Replace YourModelName with your actual model name
    
        return view('your_view_name', ['items' => $items]);
    }
    
}
