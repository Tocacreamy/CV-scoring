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

Route::get('/nilai', function () 
{
    return view('nilai', [
        "active" => "nilai",
    ]);
});

Route::get('/nilai/histori', function () 
{
    return view('histori', [
        "active" => "histori",
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);



Route::get('/upload-cv', function () {
    return view('upload-cv');
})->name('upload.cv');


Route::get('/upload-cv', [UploadCvController::class, 'showForm'])->name('upload.cv.form');
Route::post('/upload-cv', [UploadCvController::class, 'uploadCv'])->name('upload.cv.store');
