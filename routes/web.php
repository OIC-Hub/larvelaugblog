<?php

use App\Http\Controllers\Admin\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Adin News Routes

Route::get('/admin/news', [NewsController::class, 'index']);
Route::get('/admin/news/post', [NewsController::class, 'create']);
Route::post('/admin/news/post', [NewsController::class, 'store'])->name('news.post');