<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\UserLoginController;

Route::get('/', [FrontEndController::class, 'index'])
    ->middleware('auth')
    ->name('front.index');

Route::get('/register', [FrontEndController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [FrontEndController::class, 'processRegistration'])->name('register.process');

Route::get('/registration/status/{id}', [FrontEndController::class, 'checkRegistrationStatus'])->name('registration.status');

Route::get('/documents/upload/{id}', [FrontEndController::class, 'showDocumentUploadForm'])->name('documents.upload');
Route::post('/documents/upload', [FrontEndController::class, 'processDocumentUpload'])->name('documents.upload.process');

Route::get('/payment/{id}', [FrontEndController::class, 'showPaymentForm'])->name('payment');
Route::post('/payment', [FrontEndController::class, 'processPayment'])->name('payment.process');

Route::get('/registerUser', [UserLoginController::class, 'showRegisterForm'])->name('registerUser');
Route::post('/registerUser', [UserLoginController::class, 'register']);

Route::get('/about', [FrontEndController::class, 'showAbout'])->name('about');

Route::get('/login', [UserLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserLoginController::class, 'login']);