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
*/
// login

//admins

Route::middleware('guest')->group(function () {
    Route::match(['get', 'post'], 'login', ['as' => 'login', 'uses' => 'loginController@index']);
});

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', 'homeController@index')->name('home');
        Route::prefix('sanpham')->group(function () {
            Route::get('/', 'sanPhamController@index')->name('sanpham.danhsach');
            Route::get('/create', 'sanPhamController@create')->name('sanpham.create');
            Route::post('/store', 'sanPhamController@store')->name('sanpham.store');
            Route::get('/edit/{id}', 'sanPhamController@edit')->name('sanpham.edit');
            Route::post('/update/{id}', 'sanPhamController@update')->name('sanpham.update');
            Route::get('/delete/{id}', 'sanPhamController@delete')->name('sanpham.delete');
        });
        Route::prefix('quantrivien')->group(function () {
            Route::get('/', 'quantrivienController@index')->name('quantrivien.danhsach');
            // Route::get('/create', 'sanPhamController@create')->name('sanpham.create');
            Route::post('/store', 'quantrivienController@store')->name('quantrivien.store');
            Route::get('/edit/{id}', 'quantrivienController@edit')->name('quantrivien.edit');
            Route::post('/update/{id}', 'quantrivienController@update')->name('quantrivien.update');
            Route::get('/delete/{id}', 'quantrivienController@delete')->name('quantrivien.delete');
        });
    });
    Route::match(['get', 'post'], 'logout', ['as' => 'logout', 'uses' => 'loginController@logout']);
});



// fontEnds
Route::get('fontEnd.html', 'fontendController@index')->name('fondend.index');

