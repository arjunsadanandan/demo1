<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


route :: get('/','App\http\Controllers\HomeController@welcome')->name('tsadmin');
route :: get('/home','App\http\Controllers\HomeController@tsadmin')->name('teacher');
route :: get('/home1','App\http\controllers\HomeController@tsadmin1')->name('student');
route :: get('/home2','App\http\controllers\HomeController@tsadmin2')->name('admin');
