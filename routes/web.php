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

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes();
Route::get('/portfolio',[\App\Http\Controllers\PortfolioController::class,'show'])->name('portfolio');
Route::get('/',[\App\Http\Controllers\PortfolioController::class,'index'])->name('index');
Route::post('/',[\App\Http\Controllers\MailController::class,'store'])->name('index.store');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/member', [App\Http\Controllers\MemberController::class, 'show'])->name('member');
Route::get('/certificate', [App\Http\Controllers\CertificateController::class, 'index'])->name('certificate');
Route::POST('/certificate', [App\Http\Controllers\CertificateController::class, 'show'])->name('certificate.submit');
