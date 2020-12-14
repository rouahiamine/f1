<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('about', function(){
    return "About us Page";
})->name('about');


Route::group(['prefix' => 'posts'], function () {

    Route::get('/', function () {
        return "Accueil posts";
    });

    Route::get('show', function () {
        return "Accueil show";
    });

});



Route::resource('news', 'NewsController');

Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
