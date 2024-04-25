<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagina1_controller;
use App\Http\Controllers\pagina2_controller;
use App\Http\Controllers\pagina3_controller;
use App\Http\Controllers\pagina4_controller;
use App\Http\Controllers\pagina5_controller;


Route::get('/', function() {
    return view('welcome');
});
///
Route::get("/pagina1",[pagina1_controller::class, 'pagina1']);
///
route::get("/pagina2", [pagina2_controller::class, 'pagina2']);
///
route::get("/pagina3", [pagina3_controller::class, 'pagina3']);
///
route::get("/pagina4", [pagina4_controller::class, 'pagina4']);
///
route::get("/pagina5", [pagina5_controller::class, 'pagina5']);