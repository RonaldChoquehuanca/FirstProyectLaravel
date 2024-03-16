<?php

use Illuminate\Support\Facades\Route;

// ejemplo
// Route::view('/', 'landing.index' ) -> name('inicio'); // view se utiliza para vistas estaticas que no requieren peticiones de informacion
// Route::view('/about', 'landing.about' ) -> name('about');// obtiene la ruta /about y se lo redirige a resources/views/landing/about.blade.php

Route::view( '/', 'index' ) -> name('index');
Route::view( '/about', 'about' ) -> name('about');
Route::view( '/services', 'services' ) -> name('services');
Route::view( '/contact', 'contact' ) -> name('contact');
