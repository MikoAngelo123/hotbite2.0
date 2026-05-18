<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hotbite.welcome');
});

Route::get('/login', function () {
    return view('hotbite.login');
});

Route::get('/menu', function () {
    return view('hotbite.menu');
});

Route::get('/profile', function () {
    return view('hotbite.profile');
});

Route::get('/detailmie', function () {
    return view('hotbite.detailmie');
});

Route::get('/detailnasi', function () {
    return view('hotbite.detailnasi');
});

Route::get('/detailayam', function () {
    return view('hotbite.detailayam');
});

Route::get('/checkout', function () {
    return view('hotbite.checkout');
});

// =======================
// ADMIN
// =======================

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/products', function () {
    return view('admin.products');
});

Route::get('/admin/users', function () {
    return view('admin.users');
});

Route::get('/admin/tambah', function () {
    return view('admin.tambah');
});