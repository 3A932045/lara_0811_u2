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
 * 設定Route 接收參數 -> 修改參數成選擇性+為Route 取名
 */
Route::get('hello/{name?}',function ($name = 'Everybody'){
    return 'Hello,'.$name;
})->name('hello.index');
/**
 * 測試 route:list用 Route
 */
Route::get('test',function (){
    return '測試route:list';
});
/**
 * 設定 Route 前置
 */
Route::get('dashboard',function (){
    return 'dashboard';
});
/**
 * 設定另一個Route以群組包起來設定prefix
 */
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',function (){
        return 'admin dashboard';
    });
});

use App\Http\Controllers\HomeController;
Route::get('home',[HomeController::class,'index'])->name('home.index'); 
