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

Route::view('/test', 'index');




Route::view('/', 'frontend.index')->name('index');
Route::view('/about', 'frontend.about')->name('about-us');
Route::view('/contact', 'frontend.contact')->name('contact-us');
Route::view('/faq', 'frontend.faq')->name('faqs');
Route::view('/faqs', 'frontend.faqs')->name('faqs1');
Route::view('/login', 'frontend.login')->name('login');
Route::view('/register', 'frontend.register')->name('register');
