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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'checkRole:Administrator'], function(){
    
    
// });

Route::group(['middleware' => ['auth', 'checkRole:Administrator']], function () {


Route::prefix('admin')->group(function(){
    Route::get('dashboard', 'HomeController@index')->name('dashboard');
    Route::resource('users', 'UserController');
    Route::resource('inventory', 'InventoryController');

    Route::get('cash/summary', 'CashController@index')->name('cashs.index');
    Route::get('cash/create/in', 'CashController@createin')->name('cashs.createin');
    Route::get('cash/create/out', 'CashController@createout')->name('cashs.createout');

    Route::post('cash/in', 'CashController@storein')->name('cashs.storein');
    Route::post('cash/out', 'CashController@storeout')->name('cashs.storeout');

    Route::get('cash/in/{cash}', 'CashController@editin')->name('cashs.editin');
    Route::get('cash/out/{cash}', 'CashController@editout')->name('cashs.editout');

    Route::put('cash/in/{cash}', 'CashController@updatein')->name('cashs.updatein');
    Route::put('cash/out/{cash}', 'CashController@updateout')->name('cashs.updateout');

    Route::delete('cash/{cash}', 'CashController@destroy')->name('cashs.destroy');

    Route::get('settings', 'SettingController@index')->name('settings.index');
    Route::put('settings', 'SettingController@update')->name('settings.update');
    
    });
});

Route::group(['middleware' => ['auth', 'checkRole:Administrator,Pengurus Takmir, Warga']], function () {
    Route::get('dashboard', 'HomeController@index')->name('dashboard');
    Route::get('cash/summary', 'CashController@index')->name('cashs.index');
    Route::resource('forums', 'ForumController');
    Route::resource('blogs', 'BlogController');
});

// Route::get('/home', 'HomeController@index')->name('home');
