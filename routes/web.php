<?php

use App\Livewire\ContactPage;
use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\ServiceDetailPage;
use App\Livewire\TestimonialsPage;

Route::get('/', HomePage::class)->name('home');
Route::get('/contact', ContactPage::class)->name('contact');
Route::get('/testimonials', TestimonialsPage::class)->name('testimonials');
Route::get('/service/{slug}', ServiceDetailPage::class)->name('service.detail');
