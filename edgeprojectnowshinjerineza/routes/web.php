<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/reservation', [HomeController::class, 'reservation'])->name('reservation');
Route::post('/reservation', [HomeController::class, 'storeReservation'])->name('reservation.store'); // Post route for storing reservations

Route::get('/reservation', [HomeController::class, 'reservation'])->name('reservation');
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
Route::get('admin/reservations', [AdminAuthController::class, 'showReservations'])->name('admin.reservations');
Route::delete('admin/reservations/{id}', [AdminAuthController::class, 'deleteReservation'])->name('admin.reservation.delete');

//{{-- code by Nowshin Jerin Eza --}}
Route::middleware('admin')->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard'); // {{-- code by Nowshin Jerin Eza --}}
    })->name('admin.dashboard');
});
Route::get('/admin/foods', [FoodController::class, 'index'])->name('admin.foods.index');
Route::get('/admin/foods/create', [FoodController::class, 'create'])->name('admin.foods.create');
Route::post('/admin/foods', [FoodController::class, 'store'])->name('admin.foods.store');
Route::get('/admin/foods/{food}/edit', [FoodController::class, 'edit'])->name('admin.foods.edit');
Route::put('/admin/foods/{food}', [FoodController::class, 'update'])->name('admin.foods.update');
Route::delete('/admin/foods/{food}', [FoodController::class, 'destroy'])->name('admin.foods.destroy');
