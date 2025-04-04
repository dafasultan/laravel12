<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin/adminlte');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dokter', function () {
    return view('dokter.dashboard');
});

Route::get('/dokter/periksa', function () {
    return view('dokter.periksa');
});

Route::get('/dokter/obat', function () {
    return view('dokter.obat');
});

Route::get('/pasien', function () {
    return view('pasien.dashboard');
});

Route::get('/pasien/periksa', function () {
    return view('pasien.periksa');
});

Route::get('/pasien/riwayat', function () {
    return view('pasien.riwayat');
});