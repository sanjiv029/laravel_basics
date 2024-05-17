<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\homepageController;

use Illuminate\Support\Facades\Route;

Route::group(["prefix"=> "blog"], function () {

  /*   Route::get('contact',function(){
        return view('contact',['name'=>'Samantha']);
         //this name will be sent to contact.blade.php views and displayed when the contact page is reloaded.
    }); */
    Route::get('urls',function(){
        return view('urls');
    });

});
Route::get('/contact',[contactController::class,'index1']);

Route::get('/',[homepageController::class,'index']);
/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/submit-contact',[contactController::class,'store'])->name('contact.submit');

Route::get('/middleware1',function(){
   return view('');
});
