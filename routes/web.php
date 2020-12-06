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

// Route::get('/home', function () {
//    return view('welcome');
// });
// 1st lecture
Route::get('/addemp', '\App\Http\Controllers\EmployeesController@addEmployee');
Route::get('/showemps', '\App\Http\Controllers\EmployeesController@showEmployees');
Route::get('/delemp', '\App\Http\Controllers\EmployeesController@delete');

Route::get('/addcomp', '\App\Http\Controllers\CompaniesController@addCompany');
Route::get('/showcomps', '\App\Http\Controllers\CompaniesController@showCompanies');
Route::get('/delcomp', '\App\Http\Controllers\CompaniesController@delete');
