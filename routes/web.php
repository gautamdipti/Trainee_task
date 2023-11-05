<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;


// create users
Route::any('/', function () {
    return view('users.create');
});


// UserController
Route::post('store',[UserController::class,'store']);
Route::get('user-list',[UserController::class,'index']);

// TaskController
Route::get('add-task',[TaskController::class,'create']);
Route::post('/task/store',[TaskController::class,'store']);
Route::get('tasks',[TaskController::class,'taskList']);



