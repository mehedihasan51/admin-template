<?php
use App\Http\Controllers\Web\Backend\DashboardController;


use Illuminate\Support\Facades\Route;


Route::get("/dashboard", [DashboardController::class,"index"])->middleware(['auth', 'verified'])->name('dashboard');;