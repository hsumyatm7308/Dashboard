<?php

use App\Http\Controllers\dashboardbackendController;
use App\Http\Controllers\UserprofileController;
use App\Models\Productdetail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Items;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('items/index', [Items::class, 'index']);

Route::get('userprofile/edit',[UserprofileController::class,'index']);

Route::get('dashboard/product-list',[dashboardbackendController::class,'productlist']);

Route::get('dashboard/product-detail',[productdetailController::class,'index']);
