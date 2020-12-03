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
    return view('welcome' , ['page' => 'Sākums']);
});
Route::get('/about_us', function () {
    return view('about', ['page' => 'Par mums']);
});
Route::get('/contact', function () {
    return view('contact' , ['page' => 'Kontakti']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');

Route::get('/login/company', 'HomeController@company')->name('company_home');

Route::resource('moderator/company', 'Moderator\CompanyController');
Route::resource('moderator/vacancy', 'Moderator\VacancyController');
Route::resource('moderator/application', 'Moderator\ApplicationController');