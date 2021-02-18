<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
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

/*


Route::get('admin/create',[CatalogController::class,'getCreate']);
// Pagina Admin
Route::get('admin', function () {
    return view('admin');
});
Route::get('admin/create/{id}',[CatalogController::class,'getEdit']);
*/
Route::get('/',[HomeController::class,'getHome']);
Route::get('catalogo',[CatalogController::class,'getIndex']);
Route::get('catalogo/show/{id}',[CatalogController::class,'getShow']);



// Pagina Admin

Route::group(['middleware' => 'auth'],function(){

    Route::get('admin/create',[CatalogController::class,'getCreate']);
    Route::get('admin/create/{id}',[CatalogController::class,'getEdit']);
    Route::get('admin', function () {
        return view('admin');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});




Auth::routes();


