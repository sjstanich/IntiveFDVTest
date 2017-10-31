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

Route::get('/hourRent/{bikes}/{familyPlan?}','RentController@rentByHour')->where('bikes','[0-9]+');

Route::get('/dayRent/{bikes}/{familyPlan?}','RentController@rentByDay')->where('bikes','[0-9]+');

Route::get('/weekRent/{bikes}/{familyPlan?}','RentController@rentByWeek')->where('bikes','[0-9]+');