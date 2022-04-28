<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoriesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', [NewsController::class, 'index'])->name('NewsList');
Route::get('/news/сreate', [NewsController::class, 'сreate'])->name('NewsCreate');
Route::get('/news/{category}/{id}', [NewsController::class, 'detail'])->name('NewsDetail');



Route::get('/category', [CategoriesController::class, 'index'])->name('CategoryList');
Route::get('/category/{id}', [CategoriesController::class, 'detail'])->name('CategoryPath');
