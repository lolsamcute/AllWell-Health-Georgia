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

Route::get('/', 'WelcomeController@index')->name('master');
Route::get('/about', 'WelcomeController@about')->name('about');
Route::get('/service', 'WelcomeController@service')->name('service');
Route::get('/rate_insurance', 'WelcomeController@rate_insurance')->name('rate_insurance');
Route::get('/contact', 'WelcomeController@contact')->name('contact');
Route::post('/contact', 'WelcomeController@contactPost')->name('contactPost');
Route::get('/direction', 'WelcomeController@direction')->name('direction');

Route::post('/appointment', 'WelcomeController@appointmentPost')->name('appointmentPost');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
