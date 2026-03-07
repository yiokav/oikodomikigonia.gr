<?php

use App\Http\Controllers\AseController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/ase', [AseController::class, 'index'])->name('ase.index');
Route::get('/ase/{slug}', [AseController::class, 'show'])->name('ase.show')->where('slug', '[a-z0-9\-]+');

Route::get('/', function () {
    return view('home', ['navFixed' => 'fixed-top', 'title' => 'Οικοδομική Γωνία']);
})->name('home');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/pricing', function () {
    return view('pricing', ['title' => 'Pricing', 'themeCss' => 'css/theme.min.css']);
})->name('pricing');

Route::get('/terms', function () {
    return view('terms', ['title' => 'Terms of Service', 'themeCss' => 'css/theme.min.css']);
})->name('terms');

Route::get('/content', function () {
    return view('content', ['title' => 'Plain Content Sample Page', 'themeCss' => 'css/theme.min.css']);
})->name('content');

Route::get('/kitchensink', function () {
    return view('kitchensink', ['title' => 'Kitchen Sink', 'themeCss' => 'css/theme.min.css']);
})->name('kitchensink');
