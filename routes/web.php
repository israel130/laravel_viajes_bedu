<?php

use App\Http\Controllers\info;
use Illuminate\Contracts\Foundation\CachesRoutes;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Route::middleware(['auth:sanctum',config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard'); 

    Route::get('/usuario/{viaje?}', function ($viaje = null) { 
        return view('usuario',['viaje' => $viaje]); 
    })->name('usuario');  

});

Route::get('index', function () { return view('welcome'); })->name('index');
Route::get('about', function () { return view('about'); })->name('about');
Route::get('portfolio', function () { return view('portfolio'); })->name('portfolio');
Route::get('contact', function () { return view('contact'); })->name('contact');

Route::post('enviarinfo', [info::class, 'enviarinfo']);
Route::get('viajescomrpados', [info::class, 'viajescomrpados']);