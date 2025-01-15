<?php
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\ClientsFeedbackController;


Route::get("/dashboard", [DashboardController::class,"index"])->middleware(['auth', 'verified'])->name('dashboard');



//! Route for ClientsFeedback Backend
Route::controller(ClientsFeedbackController::class)->group(function () {
    Route::get('/clients-feedback', 'index')->name('clients-feedback.index');
    Route::get('/clients-feedback/create', 'create')->name('clients-feedback.create');
    Route::post('/clients-feedback/store', 'store')->name('clients-feedback.store');
    Route::get('/clients-feedback/edit/{id}', 'edit')->name('clients-feedback.edit');
    Route::put('/clients-feedback/update/{id}', 'update')->name('clients-feedback.update');
    Route::get('/clients-feedback/status/{id}', 'status')->name('clients-feedback.status');
    Route::delete('/clients-feedback/destroy/{id}', 'destroy')->name('clients-feedback.destroy');
});