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

Route::get('/dashboard/{id}', '\App\Http\Controllers\DashboardController@showDashboard')->middleware(['auth'])->name('dashboard');
Route::post('/timeline', '\App\Http\Controllers\DashboardController@createPost');
Route::get('/user', function () {
    return view('user');
});
Route::get('/user-info/{id}', '\App\Http\Controllers\DashboardController@showUser')->middleware(['auth'])->name('user-info');
// Route::post('/user', '\App\Http\Controllers\DashboardController@editUser');
// Route::get('/user/delete/{id}', '\App\Http\Controllers\DashboardController@delete')->middleware(['auth']);

Route::get('/timeline', '\App\Http\Controllers\DashboardController@index')->name('timeline');

Route::get('/legalmentions', function () {
    return view('legalmentions');
});


require __DIR__.'/auth.php';
