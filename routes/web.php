<?php

use App\Http\Controllers\AdminPanel\AdminJobController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\ImageController;

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
Route::get('/job/{id}', [HomeController::class,'job'])->name('job');
Route::get('/joblist', [HomeController::class,'joblist'])->name('joblist');
Route::get('/dropdown', [HomeController::class,'dropdown'])->name('dropdown');


// ############### Admin Panel ##################
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
    Route::get('/faq', [AdminHomeController::class, 'faq'])->name('faq');

// ############### Admin Category ##################
    Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');

    });
// ############### Admin Job ##################
    Route::prefix('/job')->name('job.')->controller(AdminJobController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');

    });

// ############### Admin Image ##################
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{pid}', 'index')->name('index');
        Route::post('/store/{pid}', 'store')->name('store');
        Route::get('/destroy/{pid}/{id}', 'destroy')->name('destroy');

    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
