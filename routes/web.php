<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ContactController;

Route::get('/', [CardController::class, 'index'])->name('home');
Route::get('form', [CardController::class, 'show'])->name('form');
Route::get('contact', [ContactController::class, 'showContact'])->name('contact');

Route::get('message', [CardController::class, 'showMessage'])->name('message');


Route::post('subscribeForm', [CardController::class, 'saveAndSendMails'])->name('subscribeForm');
Route::post('contact', [ContactController::class, 'sendmail'])->name('sendmail');

// Route::post('subscribe', [ContactController::class, 'subscribe'])->name('newsletter');

