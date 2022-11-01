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
/**
 * 設定Router 回傳 view
 */
Route::get('/',function (){
    return view('welcome');
});
/**
 * 設定Router 跳轉路由
 */
Route::get('r1', function () {
    return redirect('r2');
});
/**
 * 設定Router 回傳 view
 */
Route::get('r2',function (){
    return view('welcome');
});
/**
 * 設定Route 接收參數
 */
Route::get('hello/{name}',function ($name){
    return 'Hello,'.$name;
});
