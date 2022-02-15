<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
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
Route::view('/error', 'error');


Route::view('/', 'frontend.index')->name('index2');
Route::view('/about', 'frontend.about')->name('about-us');
Route::view('/contact', 'frontend.contact')->name('contact-us');
Route::view('/faq', 'frontend.faq')->name('faqs');
Route::view('/faqs', 'frontend.faqs')->name('faqs1');
Route::view('/log_in', 'frontend.login')->name('login');
Route::view('/get/register', 'frontend.register');



Route::prefix('/admins')->middleware(['auth','admin'])->group(function (){

// admin panel routes 
Route::view('/index', 'backend.admin.index')->name('index');
Route::view('/referrals', 'backend.admin.sent-refferals')->name('referrals');
Route::view('/settings', 'backend.admin.profile-settings')->name('settings');
Route::view('/change-password', 'backend.admin.change-password')->name('changepassword');
Route::view('/agents', 'backend.admin.total-agents')->name('agents');
Route::view('/users', 'backend.admin.total-users')->name('users');
#

Route::get('/cities', [admin::class, 'cities'])->name('cities');
Route::post('/add/cities', [admin::class, 'add_city']);


// Route::view('/dash1', 'backend.admin.index1')->name('layout');

// Agent panel routes 
Route::view('/dash1', 'backend.agent.index')->name('index1');
Route::view('/referrals1', 'backend.agent.referrals')->name('referrals1');
Route::view('/settings1', 'backend.agent.profile-settings')->name('settings1');
Route::view('/change-password1', 'backend.agent.change-password')->name('changepassword1');
Route::view('/network', 'backend.agent.network')->name('network');



});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
