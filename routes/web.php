<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/sounds/play/{id}', function ($id) {
    return view('sub.detail' , [
                                "type"=>"Detail"
                                ,"id"=>"default"
                            ]);
});

Route::get("/sounds",function(){
    return view("sub.welcome",[
                                "type"=>"Home"
                                ,"id"=>"default"
                            ]);
});
Route::get("/sounds/ ",function(){
    return redirect("/sounds");
});

Route::get("/sounds/program/{id}",function(){
    return view("sub.program",[
                                "type"=>"Program"
                                ,"id"=>"default"
                            ]);
});

Route::get("/sounds/categories/{id}",function(){
    return view("sub.category",[
                                "type"=>"Categories"
                                ,"id"=>"default"
                            ]);
});
Route::get("/sounds/schedules/{id}",function(){
    return view("sub.schedule",[
                                "type"=>"Schedule"
                                ,"id"=>"default"
                            ]);
});
Route::get("/sounds/search/{id}",function(){
    return view("sub.search",[
                                "type"=>"Search"
                                ,"id"=>"default"
                            ]);
});

