<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GalleryImageController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminEnquiryController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamMemberController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'waltham.home')->name('home');
Route::view('/about', 'waltham.about')->name('about');
Route::view('/what-we-do', 'waltham.what-we-do')->name('what-we-do');
Route::view('/vision-mission', 'waltham.vision-mission')->name('vision-mission');
Route::view('/directors', 'waltham.directors')->name('directors');
Route::view('/management', 'waltham.management')->name('management');
Route::view('/services', 'waltham.services')->name('services.index');
Route::view('/proposal', 'waltham.proposal')->name('proposal');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Keep previous project URLs useful while directing visitors to Waltham's pages.
Route::redirect('/our-team', '/management', 301);
Route::redirect('/gallery', '/directors', 301);

Route::get('/dashboard', DashboardController::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('admin/enquiries', AdminEnquiryController::class)->only(['index', 'show', 'update', 'destroy'])->names('admin.enquiries');
    Route::resource('admin/users', AdminUserController::class)->only(['index', 'create', 'store', 'destroy'])->names('admin.users');
    Route::resource('admin/services', AdminServiceController::class)->except('show')->names('admin.services');
    Route::resource('gallery-images', GalleryImageController::class)->except('show');
    Route::resource('team-members', TeamMemberController::class)->except('show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
