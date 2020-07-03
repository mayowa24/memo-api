<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('memos',"MemoController@index");

Route::get('memo/{id}', 'MemoController@show');

Route::post('memo', 'MemoController@store');

Route::put('memo', 'MemoController@store');

Route::delete('memo/{id}', 'MemoController@destroy');


// Departments route
Route::get('departments', 'DepartmentController@index');
Route::get('department/{id}','DepartmentController@show');
Route::post('department', 'DepartmentController@store');
Route::delete('department/{id}','DepartmentController@destroy');

// Schools Route
Route::get('schools', 'SchoolController@index');
Route::get('school/{id}','SchoolController@show');
Route::post('school','SchoolController@store');
Route::delete('school/{id}','SchoolController@destroy');