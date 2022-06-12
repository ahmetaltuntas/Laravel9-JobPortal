<?php

use App\Http\Controllers\AdminPanel\AdminJobController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\Job;
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
Route::get('/about-us', [HomeController::class,'aboutus'])->name('aboutus');
Route::get('/faqs', [HomeController::class,'faqs'])->name('faqs');
Route::get('/sign-in', [HomeController::class,'signin'])->name('sign-in');
Route::get('/sign-up', [HomeController::class,'signup'])->name('sign-up');
Route::get('/contactus', [HomeController::class,'contactus'])->name('contactus');
Route::post('/storemessage', [HomeController::class,'storemessage'])->name('storemessage');
Route::post('/storecomment', [HomeController::class,'storecomment'])->name('storecomment');
Route::get('/job/{id}', [HomeController::class,'job'])->name('job');
Route::get('/showprofile/{id}', [HomeController::class,'showprofile'])->name('showprofile');
Route::get('/joblist', [HomeController::class,'joblist'])->name('joblist');
Route::post('/joblist', [HomeController::class,'joblist'])->name('joblist');
Route::get('/references', [HomeController::class,'references'])->name('references');
Route::get('/dropdown', [HomeController::class,'dropdown'])->name('dropdown');
Route::get('/log-out', [HomeController::class,'logout'])->name('log-out');

// ############### Application Panel ##################
Route::prefix('application')->name('application.')->controller(ApplicationController::class)->group(function () {
    Route::post('/apply', 'apply')->name('apply');


});

Route::get('/admin/login', [AdminHomeController::class, 'login'])->name('admin.login');
Route::post('/admin/adminlogin', [AdminHomeController::class, 'adminlogin'])->name('admin.adminlogin');


// ############### User Panel ##################
Route::middleware('user')->prefix('user')->name('user.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/index', [UserController::class, 'index'])->name('index');
    Route::get('/userprofile', [UserController::class, 'profile'])->name('profile');
    Route::get('/comments', [UserController::class, 'comments'])->name('comments');
    Route::get('/destroycomment/{id}', [UserController::class, 'destroycomment'])->name('destroycomment');
    Route::post('/addskill', [UserController::class, 'addskill'])->name('addskill');
    Route::get('/deleteskill/{id}', [UserController::class, 'deleteskill'])->name('deleteskill');
    Route::post('/addexperience', [UserController::class, 'addexperience'])->name('addexperience');
    Route::get('/deleteexperience/{id}', [UserController::class, 'deleteexperience'])->name('deleteexperience');
    Route::get('/deleteeducation/{id}', [UserController::class, 'deleteeducation'])->name('deleteeducation');
    Route::post('/addeducation', [UserController::class, 'addeducation'])->name('addeducation');
    Route::post('/saveprofile', [UserController::class, 'saveprofile'])->name('saveprofile');
    Route::get('/applications', [ApplicationController::class, 'userapplications'])->name('applications');

});

// ############### Company Panel ##################
Route::middleware('company')->prefix('companycp')->name('companycp.')->group(function () {
    Route::get('/', [CompanyController::class, 'index'])->name('index');
    Route::get('/index', [CompanyController::class, 'index'])->name('index');
    Route::get('/companyprofile', [CompanyController::class, 'profile'])->name('profile');
    Route::get('/newjob', [CompanyController::class, 'newjob'])->name('newjob');
    Route::get('/jobs', [CompanyController::class, 'jobs'])->name('jobs');
    Route::get('/showjob/{id}', [CompanyController::class, 'showjob'])->name('showjob');
    Route::get('/editjob/{id}', [CompanyController::class, 'editjob'])->name('editjob');
    Route::post('/updatejob/{id}', [CompanyController::class, 'updatejob'])->name('updatejob');
    Route::post('/storejob', [CompanyController::class, 'storejob'])->name('storejob');
    Route::post('/saveprofile', [CompanyController::class, 'saveprofile'])->name('saveprofile');
    Route::get('/candidates', [ApplicationController::class, 'candidates'])->name('candidates');
    Route::get('/approve/{id}', [ApplicationController::class, 'approve'])->name('approve');
    Route::get('/reject/{id}', [ApplicationController::class, 'reject'])->name('reject');

});

// ############### Admin Panel ##################
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
    Route::get('/faq', [AdminHomeController::class, 'faq'])->name('faq');

// ############### General Category ##################
    Route::get('/settings', [AdminHomeController::class, 'settings'])->name('settings');
    Route::post('/settings', [AdminHomeController::class, 'settingsupdate'])->name('settings.update');

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
// ############### Admin Message ##################
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');

    });
// ############### Admin Comment ##################
    Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');

    });
// ############### Admin Application ##################
    Route::prefix('/application')->name('application.')->controller(ApplicationController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');

    });
// ############### Admin User ##################
    Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/destroy/{uid}', 'destroy')->name('destroy');
        Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');
        Route::post('/addrole/{id}', 'addrole')->name('addrole');

    });
// ############### Faq ##################
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');

    });

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
