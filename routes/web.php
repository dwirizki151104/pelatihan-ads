<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kelas', function () {
    return view('kelas');
});

Route::get('/lokasi', function () {
    return view('lokasi');
});

Route::get('/galeri_kami', function () {
    return view('galeri_kami');
});
