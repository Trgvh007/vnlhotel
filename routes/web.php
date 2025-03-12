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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/vidu2','App\Http\Controllers\ViDuController@vidu2');

Route::post('/tinhtong','App\Http\Controllers\ViDuController@tinhtong');

Route::get("/qlsach/theloai","App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\BookController@laythongtinsach");

Route::get("/qlsach/themsach","App\Http\Controllers\BookController@themtheloai");
Route::post("/qlsach/luudulieu","App\Http\Controllers\BookController@luudulieu");

Route::get('/sach','App\Http\Controllers\ViDuLayoutController@sach');

Route::get('/sach/theloai/{id}','App\Http\Controllers\ViDuLayoutController@theloai');

Route::get('detail_sach/{id}','App\Http\Controllers\ViDuLayoutController@chitiet');