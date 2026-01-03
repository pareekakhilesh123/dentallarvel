<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\About;
use App\Livewire\Services;
use App\Livewire\Gallery;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Booking;


Route::get('/', home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/services', Services::class)->name('services');
Route::get('/gallery', Gallery::class)->name('gallery');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/booking', Booking::class)->name('booking');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
