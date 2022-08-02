<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AffichageController;

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

Route::get('/', function () {
    return view('Acceuil');
});

// Route::get('/article/{slug}',[AffichageController::class,'afficher']);
Route::group(['prefix' => 'blog'], function () {
    Route::get('/{cateslug}/{slug}', 'App\Http\Controllers\AffichageController@show')->name('show');
    // Route::get('/{id}', 'BlogController@category')->name('category');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
