<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ContactController;



Route::get('/', [CardController::class, 'index'])->name('home');

Route::get('form', [CardController::class, 'show'])->name('form');

Route::get('contact', [ContactController::class, 'showContact'])->name('contact');



Route::post('sendmail', [ContactController::class, 'sendmail'])->name('sendmail');

Route::post('subscribe', [ContactController::class, 'subscribe'])->name('newsletter');

