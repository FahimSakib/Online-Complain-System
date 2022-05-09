<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|   Just testing dont worry
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
//FRONTEND ROUTES:
Route::get('/','Frontend\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard','Frontend\DashboardController@index')->name('dashboard');
    Route::resource('complain','Frontend\ComplainController');
    Route::post('teachers', 'Frontend\ComplainController@teachers')->name('teachers');
});

// backend routes:
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::resource('/', 'Backend\DashboardController');
    Route::resource('complains', 'Backend\ComplainController');
    Route::resource('department', 'Backend\DepartmentController');
    Route::resource('teacher', 'Backend\TeacherController');
});