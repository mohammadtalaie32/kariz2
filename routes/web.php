<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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

//Route::get('/test' , function() {
//    return public_path('img');
//});

Route::get('/' , [HomeController::class , 'index']);
Route::get('institude/{id}' , [HomeController::class , 'institude']);

Route::group(["middleware" => "isLoggedIn"] , function(){
    Route::get('/admin' , [AdminController::class , 'index']);
    Route::post('/institude/store' , [AdminController::class , 'institude_store']);
    Route::post('/institude/image_upload' , [AdminController::class , 'image_upload']);

});

Route::get("/login" , [AdminController::class , "login_view"])->name("login_view")->middleware("throttle:30,1");
Route::post("/login" , [AdminController::class , "login"])->name("login")->middleware("throttle:30,1");
Route::get("/logout" , [AdminController::class , "logout"]);