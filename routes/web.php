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

//user site 
Route::view('/', 'frontend.index')->name('index2');
Route::view('/about', 'frontend.about')->name('about-us');
Route::view('/contact', 'frontend.contact')->name('contact-us');
Route::view('/faq', 'frontend.faq')->name('faqs');
Route::view('/faqs', 'frontend.faqs')->name('faqs1');
Route::view('/login', 'frontend.login')->name('login');
Route::view('/register', 'frontend.register')->name('register');

// admin panel routes 
Route::view('/dash', 'backend.admin.index')->name('index');
Route::view('/referrals', 'backend.admin.sent-refferals')->name('referrals');
Route::view('/settings', 'backend.admin.profile-settings')->name('settings');
Route::view('/change-password', 'backend.admin.change-password')->name('changepassword');
Route::view('/agents', 'backend.admin.total-agents')->name('agents');
Route::view('/users', 'backend.admin.total-users')->name('users');
Route::view('/cities', 'backend.admin.cities')->name('cities');
Route::view('/dash1', 'backend.admin.index1')->name('layout');

// Agent panel routes 
Route::view('/dash1', 'backend.agent.index')->name('index1');
Route::view('/referrals1', 'backend.agent.referrals')->name('referrals1');
Route::view('/settings1', 'backend.agent.profile-settings')->name('settings1');
Route::view('/change-password1', 'backend.agent.change-password')->name('changepassword1');


