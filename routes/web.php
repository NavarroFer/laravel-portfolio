<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

// esto es lo mismo que lo de abajo - Para politicas de privacidad, terminos y condiciones
// Route::view('/','home',['nombre','Jorge'])->name('home');  

// Route::get('/', function(){
//         $nombre = 'Jorge';
//         return view('home',['nombre' => $nombre]);
// })->name('home');


$controllers = 'App\Http\Controllers\\';

Route::view('/','home')->name('home');  
Route::view('/about','about')->name('about');   
// //El @ dice que metodo queremos ejecutar, del controlador
Route::get('/portfolio',$controllers.'PortfolioController@index')->name('portfolio');
Route::view('/contact','contact')->name('contact');  
Route::post('/contact', $controllers.'MessagesContnroller@store');




//Solo estas rutas
// Route::resource('projects',$controllers.'PortfolioController')->only(['index','show']);
//Todas menos estas
// Route::resource('projects',$controllers.'PortfolioController')->except(['index']);
// Route::resource('projects',$controllers.'PortfolioController');


