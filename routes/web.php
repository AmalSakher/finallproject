<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SavedPostController;



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
    return view('broker.searchBroker');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');
Route::get('/redirects', [App\Http\Controllers\HomeController::class, 'index1']);
// Route::get('/saved-posts', 'SavedPostController@index')->name('saved-posts.index');
Route::get('/saved-posts', [SavedPostController::class, 'savePost'])->name('saved-posts.index');

// Route::get('/posts', 'PostController@index')->name('post');
Route::get('/posts', [PostController::class, 'index']);
Route::get('/savedposts', [PostController::class, 'showSavedPosts']);






