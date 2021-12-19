<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/' , function () {
   return view('front.layouts.master');
});  */

Route::get('/', [\App\Http\Controllers\Front\HomeController::class, "index"])->name('home.page'); // controller + method
Route::get("/product/{id}", [\App\Http\Controllers\Front\HomeController::class, "product"])->name('home.product');
Route::get("/post/{id}", [\App\Http\Controllers\Front\HomeController::class, 'post'])->name('home.post');
Route::post("/contact", [\App\Http\Controllers\Front\HomeController::class, 'contact'])->name("contact.ajax");


/* ============================ LESSON 37  today free     **********************  00 : 00      (+3)  ********************** */

Auth::routes(['register' => false]);    /* route register delete */


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->prefix('administrator')->group(function () {

    Route::resource('/panel', \App\Http\Controllers\Adminstrator\PanelController::class)->parameters(['panel' => 'id']);
    Route::get('/panel/show/data', [\App\Http\Controllers\Adminstrator\PanelController::class, 'data'])->name('panel.showData');
    Route::resource('/slider', \App\Http\Controllers\Administrator\SliderController::class)->parameters(['slider' => 'id']);
    Route::resource('/about', \App\Http\Controllers\Administrator\AboutController::class)->parameters(['about' => 'id']);
    Route::resource("/product", \App\Http\Controllers\Administrator\ProductController::class)->parameters(['product' => 'id']);
    Route::resource("/team", \App\Http\Controllers\Administrator\TeamController::class)->parameters(['team' => 'id']);
    Route::resource("/post", \App\Http\Controllers\Administrator\PostController::class)->parameters(['post' => 'id']);
    Route::resource("/info", \App\Http\Controllers\Administrator\InformationController::class)->parameters(['info' => 'id']);
    Route::resource("/social", \App\Http\Controllers\Administrator\SocialController::class)->parameters(['social' => 'id']);
    Route::resource("/link", \App\Http\Controllers\Administrator\LinkController::class)->parameters(['link' => 'id']);
    Route::resource("/contact" , \App\Http\Controllers\Administrator\ContactController::class)->parameters(['contact' => 'id']);

});
