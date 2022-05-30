<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;

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

Route::get('about', function(){
    $name = "Weitizen";
   return view('about.about', compact('name'));
});

Route::get('contact', [ContactController::class, 'contact']);

Route::get('posts', [PostController::class , 'index']);
Route::get('posts/create', [PostController::class , 'create'])->middleware(('auth'));
Route::get('posts/{id}', [PostController::class , 'show']);
Route::get('posts/{id}/edit', [PostController::class , 'edit'])->middleware(('auth'));
Route::post('posts', [PostController::class , 'store'])->middleware(('auth'));
Route::put('posts/{id}', [PostController::class , 'update'])->middleware(('auth'));
Route::delete('posts/{id}', [PostController::class , 'destroy'])->middleware(('auth'));
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
