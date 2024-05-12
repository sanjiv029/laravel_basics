<?php

use App\Http\Controllers\homepageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[homepageController::class,'index']);
/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/contact',function(){
    return view('contact');
});
