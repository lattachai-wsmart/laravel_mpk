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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::resource('/', 'HomeController');
Route::resource('/Home', 'HomeController');
Route::resource('/About', 'AboutController');
Route::resource('/Product', 'ProductController');
Route::resource('/Promotion', 'PromotionController');
Route::resource('/Service', 'ServiceController');
Route::resource('/News', 'NewsController');
Route::resource('/Gallery', 'GalleryController');
Route::resource('/Register', 'RegisterController');
Route::resource('/Contact', 'ContactController');