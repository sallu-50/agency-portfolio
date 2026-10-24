<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FreeTrialController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

// Main Public Pages
Route::get('/', [HomeController::class, 'index'])->name('home');

// Services
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

// Team
Route::get('/team', [TeamController::class, 'index'])->name('team');

// Portfolio (Public)
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])->name('portfolio.show');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Free Trial Pilot
Route::get('/free-trial', [FreeTrialController::class, 'index'])->name('free-trial');
Route::post('/free-trial', [FreeTrialController::class, 'store'])->name('free-trial.store');

// Authentication & Admin Redirects to Filament Panel
Route::get('/login', fn () => redirect()->to('/admin/login'))->name('login');
Route::get('/admin/portfolio', fn () => redirect()->route('filament.admin.resources.portfolio-items.index'))->name('admin.portfolio.index');

// Legacy URL Redirects (for backwards compatibility)
Route::redirect('/index.html', '/');
Route::redirect('/team.html', '/team');
Route::redirect('/portfolio.html', '/portfolio');
Route::redirect('/contact.html', '/contact');
Route::redirect('/data-collection.html', '/services/data-collection');
Route::redirect('/computer-vision.html', '/services/computer-vision');
Route::redirect('/nlp.html', '/services/nlp');
Route::redirect('/audio-annotation.html', '/services/audio-annotation');
Route::redirect('/video-annotation.html', '/services/video-annotation');
