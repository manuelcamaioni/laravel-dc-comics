<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComicController;

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

Route::get('/', [ComicController::class, 'index']);
Route::get('admin/create', [ComicController::class, 'create'])->name('createComic');
Route::post('/', [ComicController::class, 'store'])->name('storeComic');
Route::get('/{id}', [ComicController::class, 'show'])->name('singleComic');

