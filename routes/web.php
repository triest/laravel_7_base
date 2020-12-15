<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('upload')->name('upload.')->group(function () {
    Route::get('/', function () {
        // Route assigned name "admin.users"...
        return view('upload');
    })->name('main');

    Route::post('/upload',[HomeController::class,'upload'])->name('uploadFile');

});
