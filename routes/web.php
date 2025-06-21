<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guest.index');
});

// Route::get('/dashbaord', function () {
//     return view('admin.pages.dashboard');
// });

// Route::get('/experience', function () {
//     return view('admin.pages.tabel-experience');
// });
