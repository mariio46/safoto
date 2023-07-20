<?php

use Illuminate\Support\Facades\Route;

// Controller Class 
use App\Http\Controllers\SignInController;
use App\Http\Controllers\DashboardPictureController;
use App\Http\Controllers\DashboardEventController;
use App\Http\Controllers\DashboardYearController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\UserManagementController;

// Group Auth/Sign-in
Route::controller(SignInController::class)->group(function () {
    Route::get('/auth/sign-In', 'index')->name('signin')->middleware('guest');
    Route::post('/auth/sign-In', 'authenticate');
    Route::post('/auth/sign-Out', 'signOut')->name('signOut');
});

// Group middleware 'Auth'
Route::middleware('auth')->group(function () {
    // Group Auth/Dashboard
    Route::get('/auth/dashboard', [DashboardPictureController::class, 'dashboardPage'])->name('dashboard');

    // Pictures Management
    Route::resource('/auth/dashboard/pictures', DashboardPictureController::class)->except('show');

    // Events Management
    Route::resource('/auth/dashboard/events', DashboardEventController::class)->except('show');

    // Years Management
    Route::resource('/auth/dashboard/years', DashboardYearController::class)->except('show');

    // Users Management
    Route::resource('/auth/dashboard/users', DashboardUserController::class)->except('show');
    Route::controller(DashboardUserController::class)->group(function () {
        Route::put('/auth/dashboard/users/info/update/{username}', 'infoUpdate')->name('user.infoUpdate');
        Route::put('/auth/dashboard/users/picture/update/{username}', 'pictureUpdate')->name('user.pictureUpdate');
        Route::put('/auth/dashboard/users/bio/update/{username}', 'bioUpdate')->name('user.bioUpdate');
        Route::put('/auth/dashboard/{option}/password/update/{user}', 'passwordUpdate')->name('user.passwordUpdate');
        Route::post('/auth/dashboard/users/biodata/bioStore', 'bioStore')->name('users.bioStore');
    });
});

// Group middleware Superadmin
Route::middleware('admin')->group(function () {
    // Management All User
    Route::resource('/auth/dashboard/usersmanagement', UserManagementController::class);
    Route::controller(UserManagementController::class)->group(function () {
        Route::get('/auth/dashboard/managementusers/{user}', 'show')->name('usersmanagement.show');
        Route::get('/auth/dashboard/managementusers/{user}/edit', 'edit')->name('usersmanagement.edit');
        Route::put('/auth/dashboard/managementusers/info/{user}', 'infoUpdate')->name('usersmanagement.infoUpdate');
        Route::put('/auth/dashboard/managementusers/bio/{user}', 'bioUpdate')->name('usersmanagement.bioUpdate');
        Route::put('/auth/dashboard/managementusers/picture/{user}', 'pictureUpdate')->name('usersmanagement.pictureUpdate');
        Route::put('/auth/dashboard/managementusers/password/update/{user}', 'passwordUpdate')->name('managementusers.passwordUpdate');
        Route::post('/auth/dashboard/managementusers/bioStore', 'bioStore')->name('usersmanagement.bioStore');
        Route::delete('/auth/dashboard/managementusers/{user}', 'destroy')->name('usersmanagement.destroy');
    });
});
