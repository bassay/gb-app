<?php

use Illuminate\Support\Facades\Artisan;
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

Route::get('/clear', function() {
  Artisan::call('cache:clear');
  Artisan::call('config:cache');
  Artisan::call('view:clear');
  Artisan::call('route:clear');
//  Artisan::call('backup:clean');
  return "Кэш очищен.";
});


Route::get('/category',                 [App\Http\Controllers\Category\CategoryController::class , 'index'])    ->name('category.index');
Route::get('/category/create',          [App\Http\Controllers\Category\CategoryController::class , 'create'])   ->name('category.create');
Route::post('/category',                [App\Http\Controllers\Category\CategoryController::class , 'store'])    ->name('category.store');
Route::get('/category/{category}/edit', [App\Http\Controllers\Category\CategoryController::class , 'edit'])     ->name('category.edit');
Route::patch('/category/{category}',    [App\Http\Controllers\Category\CategoryController::class , 'update'])   ->name('category.update');
Route::delete('/category/{category}',   [App\Http\Controllers\Category\CategoryController::class , 'destroy'])  ->name('category.destroy');


Route::get('/',           [App\Http\Controllers\Post\PostController::class , 'index'])    ->name('post.index');
Route::get('/create',     [App\Http\Controllers\Post\PostController::class , 'create'])   ->name('post.create');
Route::get('/{post}/edit',[App\Http\Controllers\Post\PostController::class , 'edit'])     ->name('post.edit');
Route::get('/{post}',     [App\Http\Controllers\Post\PostController::class , 'show'])     ->name('post.show');
Route::post('/',          [App\Http\Controllers\Post\PostController::class , 'store'])    ->name('post.store');
Route::patch('/{post}',   [App\Http\Controllers\Post\PostController::class , 'update'])   ->name('post.update');
Route::delete('/{post}',  [App\Http\Controllers\Post\PostController::class , 'delete'])   ->name('post.delete');


Route::get('/hello', function () {
  return view('hello');
});

Route::get('/hello/{name}', function ($name) {
  return 'Привет, ' . $name;
});


