<?php

use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\InvestController;
use App\Http\Controllers\Admin\MentorController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Public\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact-store', [HomeController::class, 'storeContact'])->name('contact.us');
Route::get('/apply-now', [HomeController::class, 'apply'])->name('apply');
Route::post('/application-store', [HomeController::class, 'storeApplication'])->name('student.application');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/our-blogs', [HomeController::class, 'ourBlogs'])->name('our.blogs');
Route::get('/blog-details/{id}', [HomeController::class, 'blogDetails'])->name('blog.details');
Route::get('/study-in-uk', [HomeController::class, 'studyUk'])->name('study.uk');
Route::get('/study-in-india', [HomeController::class, 'studyIndia'])->name('study.india');
Route::get('/study-in-china', [HomeController::class, 'studyChina'])->name('study.china');


Route::middleware(['auth', 'permission:admin-panel'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users-create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users-store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users-details/{id}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/roles/{user}', [UserController::class, 'role'])->name('users.roles.edit');
    Route::post('/users/roles/{user}', [UserController::class, 'giveRole'])->name('users.roles');

    // search route
    Route::get('/search', [IndexController::class, 'search'])->name('search');
});

Route::get('/admin-login', [IndexController::class, 'login'])->name('admin.login');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/gallery-list', [GalleryController::class, 'galleryList'])->name('gallery.list');
    Route::get('/add-gallery', [GalleryController::class, 'create'])->name('create.gallery');
    Route::post('/add-gallery', [GalleryController::class, 'store'])->name('store.gallery');
    Route::post('/destroy-gallery/{id}', [GalleryController::class, 'destroy'])->name('destroy.gallery');

    Route::resource('/subcribers', SubscriberController::class);
    Route::resource('/applications', ApplicationController::class);
    Route::resource('/contacts', ContactController::class);
    Route::resource('/invests', InvestController::class);
    Route::resource('/reviews', ReviewController::class);
    Route::resource('/mentors', MentorController::class);
    Route::resource('/partners', PartnerController::class);
    Route::resource('/blogs', BlogController::class);

    // all settings route
    Route::get('/general-setting', [SettingsController::class, 'index'])->name('general.setting');
    Route::post('/setting-update', [SettingsController::class, 'update'])->name('setting.update');

    Route::get('/email-setting', [SettingsController::class, 'emailSetting'])->name('email.setting');
    Route::post('/email-update', [SettingsController::class, 'emailUpdate'])->name('email.update');

    Route::get('application-cache-clear', [SettingsController::class, 'cacheClear'])->name('application.cache.clear');
});

require __DIR__ . '/auth.php';


