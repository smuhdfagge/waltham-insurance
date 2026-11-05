<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryImageController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminSocialSettingsController;
use App\Http\Controllers\AdminEnquiryController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamMemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/what-we-do', [PageController::class, 'whatWeDo'])->name('what-we-do');
Route::get('/vision-mission', [PageController::class, 'visionMission'])->name('vision-mission');
Route::get('/directors', [PageController::class, 'directors'])->name('directors');
Route::get('/management', [PageController::class, 'management'])->name('management');
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/proposal', [PageController::class, 'proposal'])->name('proposal');
Route::get('/claims', [PageController::class, 'claims'])->name('claims');
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
    Route::get('admin/settings/social', [AdminSocialSettingsController::class, 'edit'])->name('admin.settings.social');
    Route::put('admin/settings/social', [AdminSocialSettingsController::class, 'update'])->name('admin.settings.social.update');
    Route::resource('admin/users', AdminUserController::class)->only(['index', 'create', 'store', 'destroy'])->names('admin.users');
    Route::resource('admin/services', AdminServiceController::class)->except('show')->names('admin.services');
    Route::resource('gallery-images', GalleryImageController::class)->except('show');
    Route::resource('team-members', TeamMemberController::class)->except('show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
