<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('users', 'App\Http\Controllers\UserController')->middleware(['auth']);
Route::resource('roles', 'App\Http\Controllers\RoleController')->middleware(['auth']);
Route::resource('permissions', 'App\Http\Controllers\PermissionController')->middleware(['auth']);
Route::resource('services', 'App\Http\Controllers\ServiceController')->middleware(['auth']);
Route::resource('quotes', 'App\Http\Controllers\QuoteController')->middleware(['auth']);
Route::resource('projects', 'App\Http\Controllers\ProjectController')->middleware(['auth']);
Route::resource('buildings', 'App\Http\Controllers\BuildingController')->middleware(['auth']);

require __DIR__.'/auth.php';
