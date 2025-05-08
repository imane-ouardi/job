<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ApplicationController;


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home'); 
    Route::get('/about', 'about')->name('about');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/signup', 'signup')->name('signup'); 
    Route::get('/signin', 'signin')->name('signin'); 
});

// --- Routes للوظائف ---
Route::controller(JobController::class)->prefix('jobs')->name('jobs.')->group(function () {
    Route::get('/', 'index')->name('index'); // يعالج /jobs مع الفلترة
    Route::get('/{job}', 'show')->name('show'); // يعالج /jobs/{job_id}
});

// --- Route لصفحة تفاصيل الشركة (Employer) ---
Route::get('/employer-detail/{company}', [CompanyController::class, 'show'])->name('employer.detail');

// --- Routes لطلبات التقديم على الوظائف ---
// Route::controller(ApplicationController::class)->prefix('applications')->name('applications.')->group(function () {
//     // يجب أن يكون هذا الـ Route محميًا بـ middleware للمستخدمين المسجلين فقط
//     Route::get('/create/{job}', 'create')->name('create')->middleware('auth'); // {job} سيتم حقنه كـ Job model
//     Route::post('/', 'store')->name('store')->middleware('auth');
// });

Route::get('/applications/create/{job}', [ApplicationController::class, 'create'])->name('applications.create');
Route::post('/applications', [ApplicationController::class, 'store'])->name('applications.store');
