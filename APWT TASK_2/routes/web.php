<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

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
Route::get('/login',[pagesController::class, 'login'])->name('login');
Route::post('/login',[pagesController::class, 'checkuser'])->name('login');
Route::get('/register',[pagesController::class, 'register'])->name('register');
Route::post('/register',[pagesController::class, 'createAccount'])->name('register');
Route::get('/', [pagesController::class, 'home'])->name('home');
Route::get('/Product/service', [pagesController::class, 'product'])->name('product');
Route::get('/Team', [pagesController::class, 'team'])->name('team');
Route::get('/About', [pagesController::class, 'about'])->name('about');
Route::get('/Contact', [pagesController::class, 'contact'])->name('contact');
Route::post('/Contact', [pagesController::class, 'createContact'])->name('contact');