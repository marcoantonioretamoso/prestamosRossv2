<?php

use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\LoanController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'loans', 'middleware' => ['auth'], 'as' => 'loans.'], function () {
  Route::get('/', [LoanController::class, 'index'])->name('index');
});
