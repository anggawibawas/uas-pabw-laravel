<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get( uri: '/', action: function () {
    return view('welcome');
});


Route::get( uri: '/hello-world', action: function () {
    return "<h1>HelloWorld_by PABW 7A2 HALO_AnggaWibawaS_091<h1>";
});