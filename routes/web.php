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
    return view('sub.detail' , ["id"=>"default"]);
});
Route::get('/sounds/{id}', function($param){
    $returnValue = $param == "programs" || $param == "top-shows"
                        ? view("sub.detail",['id'=>$param])
                        : view("errors.404");
    return $returnValue;

});

Route::get("/sounds",function(){
    return view("sub.welcome",["id" =>" "]);
});
Route::get("/sounds/ ",function(){
    return view("sub.welcome",["id" =>" "]);
});

Route::get("/sounds/program/34e",function(){
    return view("sub.program",['id'=>'34e']);
});
