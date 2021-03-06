<?php

use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [PageController::class, 'home']);

Route::prefix('product') -> group(function(){
    Route::get('/', [PageController::class, 'product']);
});

Route::get('/news/{id}', [PageController::class, 'news']);

Route::prefix('program') -> group(function(){
    Route::get('/', [PageController::class, 'program']);
});

Route::get('/about', [PageController::class, 'about']);

//Route::resource('contact', PageController::class);

Route::get('/contact', [PageController::class, 'contact']);
