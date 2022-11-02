<?php

use App\Http\Controllers\Api\ScheduleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api'],function(){
    Route::post('posts',[ScheduleController::class,'scheduleindex']);
    Route::post('posts/create',[ScheduleController::class,'create']);
    Route::post('edit',[ScheduleController::class,'edit']);
    Route::post('update',[ScheduleController::class,'update']);
    Route::post('delete',[ScheduleController::class,'delete']);
});
