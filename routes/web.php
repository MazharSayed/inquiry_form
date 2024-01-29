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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/inquiry', [App\Http\Controllers\Admin\InquiryController::class, 'store'])->name('inquiry.store');

Route::get('/inquiry', [App\Http\Controllers\Admin\InquiryController::class, 'index'])->name('inquiry.list');

Route::get('inquiry/delete/{id}', [App\Http\Controllers\Admin\InquiryController::class, 'delete'])->name('inquiry.delete');
