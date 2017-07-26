<?php

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
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::resource('/users', 'UserController');
Route::resource('/departments', 'DepartmentController');
Route::resource('/positions', 'PositionController');
Route::resource('/routines', 'RoutineController');
Route::post('/user/validateUserForm', 'UserController@validateUserForm');
Route::put('/user/updatePassword', 'UserController@updatePassword');

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
