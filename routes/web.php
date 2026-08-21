<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TarifsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\EquipeController;

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('home');

Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');

Route::get('/services', [App\Http\Controllers\ServicesController::class, 'services'])->name('services');

Route::get('/tarifs', [App\Http\Controllers\TarifsController::class, 'tarifs'])->name('tarifs');

Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'portfolio'])->name('portfolio');

Route::get('/equipe', [App\Http\Controllers\EquipeController::class, 'equipe'])->name('equipe');
