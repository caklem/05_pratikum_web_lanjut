<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\MateriWebController;
use App\Http\Controllers\EdulevelController;
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

Route::get('/', function () {
    return view('main');
});

Route::get('/materi', [EdulevelController::class, 'data1']);

// Route::get('/home', [HomeController::class, 'index']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::prefix('product')->group(function(){
//     Route::get('/', [ProductController::class, 'index']);
//     Route::get('/satu', [ProductController::class, 'satu']);
//     Route::get('/dua', [ProductController::class, 'dua']);
//     Route::get('/tiga', [ProductController::class, 'tiga']);
//     Route::get('/empat', [ProductController::class, 'empat']);
// });

// Route::get('/news/{id}', [NewsController::class, 'index']);

// Route::prefix('program')->group(function(){
//     Route::get('/satu', [ProgramController::class, 'satu']);
//     Route::get('/dua', [ProgramController::class, 'dua']);
//     Route::get('/tiga', [ProgramController::class, 'tiga']);
//     Route::get('/empat', [ProgramController::class, 'empat']);
// });

// Route::get('/about-us', function () {
//     return view('about-us');
// });

// Route::resource('/contact-us', ContactUsController::class)->only(["index"]);

// Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
// Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
// Route::get('/pengalaman', [PengalamanController::class, 'index'])->name('pengalaman');
// Route::get('/materi', [MateriWebController::class, 'index'])->name('materi_web');
// //Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
