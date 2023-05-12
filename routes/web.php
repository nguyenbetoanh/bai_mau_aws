<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('catalog',[CatalogController::class,'index']);                   //getAll

Route::get('catalog/input',[CatalogController::class,'input']);             // Chuyển trang nhập dữ liệu
Route::post('catalog/create',[CatalogController::class,'create']);          // Thêm mới

Route::get('catalog/update/{id}',[CatalogController::class,'edit']);               // Chuyển trang chỉnh dữ liệu
Route::post('catalog/update/{id}',[CatalogController::class,'update']);           //  hChỉnh sửa dữ liệu

Route::get('catalog/delete/{id}',[CatalogController::class,'delete']);    //xóa

Route::get('catalog/search/{key}',[CatalogController::class,'search']);    //tìm kiếm theo tên catalog hoặc id




 



