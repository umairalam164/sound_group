<?php

use Illuminate\Support\Facades\Route;

// Public Pages
Route::get('/', fn() => view('index'))->name('home');
Route::get('/music', fn() => view('music'))->name('music');
Route::get('/videos', fn() => view('videos'))->name('videos');
Route::get('/albums', fn() => view('albums'))->name('albums');
Route::get('/artists', fn() => view('artists'))->name('artists');
Route::get('/genres', fn() => view('genres'))->name('genres');
Route::get('/languages', fn() => view('languages'))->name('languages');
Route::get('/about', fn() => view('about'))->name('about');

// Auth Pages (abhi ke liye view-only, baad mein controller bana lena)
Route::get('/login', fn() => view('login'))->name('login');
Route::get('/register', fn() => view('register'))->name('register');

// Admin
// Route::get('/admin/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');





// Admin Routes (baad mein middleware laga dena)
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');
    Route::get('/music',     fn() => view('admin.music'))->name('admin.music');
    Route::get('/videos',    fn() => view('admin.videos'))->name('admin.videos');
    Route::get('/albums',    fn() => view('admin.albums'))->name('admin.albums');
    Route::get('/artists',   fn() => view('admin.artists'))->name('admin.artists');
    Route::get('/genres',    fn() => view('admin.genres'))->name('admin.genres');
    Route::get('/languages', fn() => view('admin.languages'))->name('admin.languages');
    Route::get('/users',     fn() => view('admin.users'))->name('admin.users');
    Route::get('/reviews',   fn() => view('admin.reviews'))->name('admin.reviews');
    Route::get('/settings',  fn() => view('admin.settings'))->name('admin.settings');
});
Route::get('/detail', fn() => view('detail'))->name('detail');