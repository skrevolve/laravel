<?php
//RouteServiceProvider가 이미  web미들웨어 그룹안에 있는 기본적인 라우트 파일들을 포함하고있다면
//수동으로 routes.php파일에 그룹을 추가해야함

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
