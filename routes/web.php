<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

// Main Pages
Route::get('/', [HomeController::class, 'index'])->name('home');

// Services
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

// Team
Route::get('/team', [TeamController::class, 'index'])->name('team');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Legacy URL Redirects (for backwards compatibility)
Route::redirect('/index.html', '/');
Route::redirect('/team.html', '/team');
Route::redirect('/contact.html', '/contact');
Route::redirect('/data-collection.html', '/services/data-collection');
Route::redirect('/computer-vision.html', '/services/computer-vision');
Route::redirect('/nlp.html', '/services/nlp');
Route::redirect('/audio-annotation.html', '/services/audio-annotation');
Route::redirect('/video-annotation.html', '/services/video-annotation');
