<?php
use App\chuyenmuc;
use App\chuyenmuccon;
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
use Illuminate\Support\Arr;
Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'HomeController@index');

Route::get('chuyenmuc/{id}', 'ChuyenMucController@show');
Route::get('chuyenmuccon/{id}', 'ChuyenMucConController@show');
Route::get('baiviet/{id}', 'BaiVietController@show');