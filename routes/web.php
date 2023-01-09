<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;


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

Route::prefix('todo')->group(function () {
    Route::get('/', [TasksController::class, 'all']);
    Route::get('/done', [TasksController::class, 'done']);
    Route::get('/not-done', [TasksController::class, 'notDone']);
    Route::get('/create', [TasksController::class, 'form']);
    Route::post('/result', [TasksController::class, 'store']);


});

