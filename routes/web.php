<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Http\Controllers\frontend\PatveriController;
use App\Http\Controllers\admin\PatvereditController;
use App\Http\Controllers\frontend\ComentController;
use App\Http\Controllers\admin\CommeditController;
use App\Http\Controllers\admin\ShopeditController;







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
    return view('home');
});

Route::get('update', 'App\Http\Controllers\admin\TableditController@index');

Route::post('homee_post/action', 'App\Http\Controllers\admin\TableditController@action')->name('homee_post.action');




Route::get('/home_admin',[HomeController::class,'index']);
Route::post('/add_home',[HomeController::class,'create']);

Route::get('/',[HomeController::class,'model']);


Route::get('/link',[HomeController::class,'link']);



Route::get('link/{post}','App\Http\Controllers\frontend\HomeController@link');
Route::get('shop',[ShopController::class,'index']);

//-----------------------------------------
Route::get('shop_admin',[ShopController::class,'tesnel']);
Route::post('/add_shop',[ShopController::class,'create']);
Route::get('/shop',[ShopController::class,'model']);
Route::get('shop_vajarq/{post}','App\Http\Controllers\frontend\ShopController@link');


Route::post('/addav_baza',[PatveriController::class,'create']);


Route::get('shop_update', 'App\Http\Controllers\admin\ShopeditController@index');

Route::post('shop_post/action', 'App\Http\Controllers\admin\ShopeditController@action')->name('shop_post.action');

Route::get('patver_update', 'App\Http\Controllers\admin\PatvereditController@index');

Route::post('patver_post/action', 'App\Http\Controllers\admin\PatvereditController@action')->name('patver_post.action');

//------------------------------


Route::get('coment', 'App\Http\Controllers\frontend\ComentController@model');
Route::post('/add_coment', 'App\Http\Controllers\frontend\ComentController@create');

Route::get('com_edit', 'App\Http\Controllers\admin\CommeditController@index');

Route::post('com_post/action', 'App\Http\Controllers\admin\CommeditController@action')->name('com_post.action');


//--------------------------------------------------
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


//------------------------------------



