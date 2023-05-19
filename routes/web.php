<?php

use App\Http\Controllers\Admin\SettingController;
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

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('index');


    Route::get('/settings', [SettingController::class, 'index'])->name('settings');

    Route::post('/settings/update/{setting}', [SettingController::class, 'update'])->name('settings.update');
});



    Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
