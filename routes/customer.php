<?php

use App\Http\Controllers\Admin\CustomerController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'customers', 'middleware' => ['auth'], 'as' => 'customer.'], function () {
    Route::get('/', [CustomerController::class, 'index'])->name('dashboard');
});