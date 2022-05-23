<?php

use App\Http\Controllers;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\NewController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/', 'AccountsController');

// Route::resource('accounts', AccountsController::class);
Route::resource('/', NewController::class);

// for the mean time 
Route::get('/login', function(){
    return view('new.login');
});
Route::get('/signup', function(){
    return view('new.signup');
});
Route::get('/registration', function(){
    return view('new.registration_form');
});
Route::get('/dashboard', function(){
    return view('new.dashboard');
});
Route::get('/profile', function(){
    return view('new.profile');
});
Route::get('/section', function(){
    return view('new.section');
});
Route::get('/masterlist', function(){
    return view('new.masterlist');
});
Route::get('/noticeboard',function(){
    return view('new.noticeboard');
});
Route::get('/section_add', function(){
    return view('new.section_add');
});
Route::get('/section_list', function(){
    return view('new.section_list');
});
Route::get('/noticeboard-add', function(){
    return view('new.noticeboard-add');
});
Route::get('/forget-password', function(){
    return view('new.forgot-password');
});