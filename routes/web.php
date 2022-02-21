<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\agentController;
use Illuminate\Support\Facades\Auth;
use app\Models\User;
use App\Models\cites;
use App\Http\Controllers\ReferralController;








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


Route::get('/', [agentController::class, 'index'])->name('index2');
// Route::view('/', 'frontend.index')->name('index2');
Route::view('/about', 'frontend.about')->name('about-us');
Route::view('/contact', 'frontend.contact')->name('contact-us');
Route::view('/faq', 'frontend.faq')->name('faqs');
Route::view('/faqs', 'frontend.faqs')->name('faqs1');
Route::view('/log_in', 'frontend.login')->name('login');


Route::get('/get/register', function() {

    return view('frontend.register', [
            'citiy' =>cites::all()
        ]);
});



Route::prefix('/admins')->middleware(['auth','admin'])->group(function (){

// admin panel routes 
Route::get('/index', [admin::class, 'index'] )->name('index');
Route::view('/referrals', 'backend.admin.sent-refferals')->name('referrals');
Route::view('/settings', 'backend.admin.profile-settings')->name('settings');
Route::view('/change-password', 'backend.admin.change-password')->name('changepassword');
Route::get('/users', [admin::class, 'users'] )->name('users');
Route::get('/agents', [admin::class, 'agents'])->name('agents');
Route::get('/cities', [admin::class, 'cities'])->name('cities');
Route::post('/add/cities', [admin::class, 'add_city']);
Route::post('/cities/update/{id}', [admin::class, 'update_city']);
Route::get('/cities/delete/{id}', [admin::class, 'delete_city']);
Route::get('/approve/agents/{id}', [admin::class, 'approve']);
Route::get('/reject/agents/{id}', [admin::class, 'reject']);
Route::post('/update/{id}', [admin::class, 'update']);

});



// Route::view('/dash1', 'backend.admin.index1')->name('layout');

// Agent panel routes 

Route::prefix('/user')->middleware(['auth','user'])->group(function (){


Route::view('/index', 'backend.agent.index')->name('index1');
// Route::view('/index',[usercontroller::class, 'notifications'])->name('index1');
Route::get('/referrals1', [usercontroller::class, 'referrals'])->name('referrals1');
Route::post('add/referral', [ReferralController::class, 'add_referral']);
Route::post('loc_referrals', [usercontroller::class, 'loc_referrals']);


Route::view('/settings1', 'backend.agent.profile-settings')->name('settings1');
Route::view('/change-password1', 'backend.agent.change-password')->name('changepassword1');
Route::get('/network', [ReferralController::class, 'network'])->name('network');

Route::post('/personal-information', [agentController::class, 'update_information']);
Route::post('/change-password', [agentController::class, 'change_password']);
Route::get('/acceptorreject/{id}/{status}', [agentController::class, 'accept_or_reject'])->name('user.status');



});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

