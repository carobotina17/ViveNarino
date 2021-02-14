<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Bienvenida
Route::get('/', function () {
    return view('bienvenida');
});

// Catalogo 
Route::get('catalogo', function () {
    return view('catalog.catalogo');
});

// Vista detalle Sitio turistico
Route::get('catalogo/show/{id}', function ($id) {
    return view('catalogo.show', array('id=>$id'));
});

// Pagina Admin
Route::get('admin', function () {
    return view('admin');
});

// Pagina Admin Creacion 
Route::get('admin/create', function () {
    return view('creacion');
});

// Modificacion nuevo sitio turistico
Route::get('admin/create/{id}', function ($id) {
    return view('modificar');
});

