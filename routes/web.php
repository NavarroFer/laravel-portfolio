<?php

use Illuminate\Support\Facades\Route;

// esto es lo mismo que lo de abajo - Para politicas de privacidad, terminos y condiciones
// Route::view('/','home',['nombre','Jorge'])->name('home');  

// Route::get('/', function(){
//         $nombre = 'Jorge';
//         return view('home',['nombre' => $nombre]);
// })->name('home');

$portfolio = [
    ['title' => 'Proyecto #1'],
    ['title' => 'Proyecto #2'],
    ['title' => 'Proyecto #3'],
    ['title' => 'Proyecto #4']
];

Route::view('/','home')->name('home');  

Route::view('/about','about')->name('about');  

Route::view('/portfolio','portfolio',['portfolio'=>$portfolio])->name('portfolio');  

Route::view('/contact','contact')->name('contact');  


