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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//get

Route::get('employees','EmployeeController@getEmployee');

//get specific 

Route::get('employee/{id}','EmployeeController@getEmployeeById');

//add

Route::post('addEmployee', 'EmployeeController@addEmployee');

//update

Route::get('updateEmployee/{id}','EmployeeController@updateEmployee');

//delete

Route::delete('deleteEmployee/{id}', 'EmployeeController@deleteEmployee');