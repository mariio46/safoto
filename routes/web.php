<?php

use Illuminate\Support\Facades\Route;

// Controller Class 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GalleryController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile/{user:username}', [ProfileController::class, 'getProfile'])->name('user.profile');

// Group Gallery
Route::controller(GalleryController::class)->group(function () {
    Route::get('/gallery', 'index')->name('gallery');
    Route::get('/gallery/{user:username}', 'getUserPicture')->name('user.gallery');
    Route::get('/gallery/event/{event:slug}', 'getEventPicture')->name('event.gallery');
    Route::get('/gallery/year/{year:slug}', 'getYearPicture')->name('year.gallery');
});

require __DIR__ . '/auth.php';
