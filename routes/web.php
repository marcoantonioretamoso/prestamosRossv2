<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

require __DIR__ . '/customer.php';
require __DIR__ . '/loan.php';
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('admin.dashboard');
    } else {
        return Inertia::render('Admin/Login');
    }
});

Route::post('/login', [AuthController::class, 'login'])->name('admin.login');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
});