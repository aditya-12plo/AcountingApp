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
Route::get('/', 'IndexController@index');
Route::get('/pdf', 'IndexController@pdf');
Route::get('/excel', 'IndexController@excel');


Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

*/


// Route::get('/{any}', function(){
//     return view('welcome');
// })->where('any','.*');


Route::name('locale.switch')->get('switch/{locale}', 'LocaleController@switch');
Route::middleware(['localized'])->group(function () {

    Route::get('/', 'IndexController@index')->name('loginFirst');

    /**
     * user login
     */
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
});
