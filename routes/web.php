<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda', ['name' => 'user']);
});
Route::get('/donasi', function () {
    return view('donasi');
});
Route::get('/galang-dana', function () {
    return view('galangDana');
});
