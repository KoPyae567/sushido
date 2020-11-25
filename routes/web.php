<?php

use App\Http\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/counter',Counter::class);



Route::get('/admin/home',function(){
    return view('admin.index');
});

Route::get('/admin/city',function(){
    return view('admin.city');
});


Route::get('/admin/airline',function(){
    return view('admin.airline');
});
Route::get('/admin/create-ticket',function(){
    $cities=\App\Models\City::orderBy('name')->get();
    $airlines=\App\Models\Airline::orderBy('name')->get();
    return view('admin.ticket.create-ticket')->with([
        'cities'=>$cities,
        'airlines'=>$airlines
    ]);
});



Route::get('testing',[CityController::class,'index']);
