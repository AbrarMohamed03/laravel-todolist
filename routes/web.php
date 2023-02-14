<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

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

Route::get('/',[TodoListController::class, 'index']);

Route::post('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');

Route::post('/completeRoute/{id}', [TodoListController::class, 'complete'])->name('complete');

Route::post('/EditRoute/{id}', [TodoListController::class, 'Edit'])->name('Edit');

Route::post('/updateItemRoute/{id}', [TodoListController::class, 'updateItem'])->name('updateItem');
