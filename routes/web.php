<?php

use App\Post;
use Illuminate\Support\Carbon;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AffichageController;
use App\Http\Controllers\VoyagerInscritsController;

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
Route::get('/inscription-NewsLetter',function(){
    return view('inscription');
});
Route:: get('/newsletter',function(){
    \Carbon\Carbon::setLocale('fr');
    return view('newsletter');
});
Route::get('/', function () {

    $PendingPosts = Post::whereStatus('PENDING')->get();
    foreach($PendingPosts as $PendingPost){
        if($PendingPost->planned <= Carbon::now()->timezone('Africa/Casablanca')){
            $PendingPost->status = 'PUBLISHED';
            $PendingPost->save();
        }
    }
    return view('Acceuil');
});

// Route::get('/article/{slug}',[AffichageController::class,'afficher']);
Route::group(['prefix' => 'sport'], function () {
    Route::get('/{cateslug}/{slug}', 'App\Http\Controllers\AffichageController@show')->name('show');
    Route::get('/{slug}', 'App\Http\Controllers\AffichageController@category')->name('category');
});

Route::post('/inscritfromsite',[VoyagerInscritsController::class,'storeFromSite']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
