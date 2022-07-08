<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\narendra064Controller;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\News1Controller;
use App\Http\Controllers\DashboardController;
use App\Models\Authors;
use App\Models\News;

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


    $news = News::all();
    $author = Authors::all();

    return view('welcome', compact("news", "author"));
});

Route::get('author', [narendra064Controller::class, 'author']);
Route::get('news', [narendra064Controller::class, 'news']);
Route::get('form', [narendra064Controller::class, 'form']);
Route::get('kategori', [narendra064Controller::class, 'kategori']);
Route::get('profile', [narendra064Controller::class, 'profile']);
Route::get('dashboard', [narendra064Controller::class, 'dashboard']);
Route::resource('author', AuthorsController::class);
Route::resource('news', NewsController::class);
Route::resource('news1', News1Controller::class);
Route::resource('dashboard', DashboardController::class);
