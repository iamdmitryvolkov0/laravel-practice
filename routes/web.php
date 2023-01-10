<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksViewsController;
use App\Http\Controllers\TasksDataController;


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

Route::get('/',[TasksViewsController::class, 'main']);

Route::prefix('todo')->group(function () {
    Route::get('/', [TasksViewsController::class, 'all']);
    Route::get('/done', [TasksViewsController::class, 'done']);
    Route::get('/not-done', [TasksViewsController::class, 'notDone']);
    Route::get('/create', [TasksViewsController::class, 'form']);

    Route::post('/result', [TasksDataController::class, 'store']);
    Route::post('/delete',[TasksDataController::class, 'destroy']);
    Route::post('/update',[TasksDataController::class, 'statusUpdate']);


});

