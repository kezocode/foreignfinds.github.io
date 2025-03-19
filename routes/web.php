<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

// Route::view('/', 'index');

// Route::view('/japan/places', 'places', ['name' => 'places'])->name('places');


Route::get('/', function () {
    return view('index');
});

Route::get('/japan/places', function () {
    return view('japan.places');
})->name('places');

Route::get('/japan/food', function () {
    return view('japan.food');
})->name('food');

Route::get('/japan/fun', function () {
    return view('japan.fun');
})->name('fun');

Route::get('/japan/history', function () {
    return view('japan.history');
})->name('history');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactFormController::class, 'submit'])->name('contact.submit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
