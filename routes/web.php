<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get("/sounds/search/{data}",function($data,Request $request){
    return view("sub.search",[
                                "id" => "default",
                                "type"=>"Search"
                                ,"data"=>$data
                                ,"req"=>$request
                            ]);
});

$data = [
        [
            "cover" => "2.jpg",
            "program" => "MG Radio Network",
            "judul" => "Penurunan Harga Tiket Sebesar 15% | Ft. Djoko Setijowarno",
            "released" => "06 Jul 2002",
            "duration" => "24 min",
            "summary" => "Pemerintah dalam hal ini Kementerian Perhubungan menaikkan harga tiket pesawat, namun pemerintah juga menyarankan kepada maskapai terkait penurunan harga tiket sebesar 15% jika maskapai mau menurunkan harga tiket pada saat jam-jam sepi. Namun pemerintah menangguhkan kembali per hari ini kenaikan tarif ojek online. Apakah ini menjadi kabar gembira bagi pengguna? Mengingat pemerintah belum menentukan kapan waktu yang tepat untuk menaikkannya"
        ]
    ];

