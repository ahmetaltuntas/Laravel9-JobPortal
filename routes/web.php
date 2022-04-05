<?php

use App\Http\Controllers\HomeController;
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
// Home
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/404', [HomeController::class,'notfound'])->name('notfound');
Route::get('/about-us', [HomeController::class,'about-us'])->name('about-us');
Route::get('/faqs', [HomeController::class,'faqs'])->name('faqs');
Route::get('/sign-in', [HomeController::class,'signin'])->name('sign-in');
Route::get('/sign-up', [HomeController::class,'signup'])->name('sign-up');
Route::get('/contact-us', [HomeController::class,'contactus'])->name('contact-us');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
