<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadCvController;
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

Route::get('/', function () 
{
    return view('home', [
        "active" => "home"
    ]);
});

Route::get('/about', function () 
{
    return view('about', [
        "active" => "about",
    ]);
});

Route::get('/panduan', function () 
{
    return view('panduan', [
        "active" => "panduan",
    ]);
});

Route::get('/histori', function () 
{
    return view('histori', [
        "active" => "histori",
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/upload-cv', [UploadCvController::class, 'showForm'])->name('upload.cv.form')->middleware('auth');
Route::post('/upload-cv', [UploadCvController::class, 'uploadCv'])->name('upload.cv.store')->middleware('auth');

Route::get('/nilai/{id}', [UploadCvController::class, 'nilai'])->name('nilai')->middleware('auth');
Route::delete('/nilai/{id}', [UploadCvController::class, 'deleteNilai'])->middleware('auth');

Route::get('/histori', [UploadCvController::class, 'histori'])->middleware('auth');