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

//Route::get('/', function () {
//    return view('tasks');
//});

/**
 * Task 대시보드
 */
Route::get('/', function () {
    return view('tasks');
});

/**
 * Task 추가
 */
Route::post('/task', function (Request $request) {

});

/**
 * Task 삭제
 */
Route::delete('/task/{task}', function (Task $task) {
    //
});

Route::resource('contacts', ContactController::class);
