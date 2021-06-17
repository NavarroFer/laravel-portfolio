<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

$controllers = 'App\Http\Controllers\\';

Route::view('/','home')->name('home');  
Route::view('/about','about')->name('about');

//agarra todas las rutas que estan en el controller?
Route::resource('portfolio', $controllers.'ProjectController')->names('projects')->parameters(['portfolio'=>'project']);

Route::view('/contact','contact')->name('contact');  
Route::post('/contact', $controllers.'MessageContnroller@store')->name('messages.store');

//para deshabilitar el registro
// Auth::routes(['register'=> false]);
Auth::routes();

