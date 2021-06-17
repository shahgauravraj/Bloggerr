<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\StatisticsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/services', [PagesController::class, 'services']);

Route::get('/statistics', [StatisticsController::class, 'index']);

Route::resources([
    'posts' => PostsController::class,
]);
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
