<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.beranda');
});
Route::get('/donasi', function () {
    return view('public.donasi');
});
Route::get('/galang-dana', function () {
    return view('public.galangDana');
});
Route::get('/about', function () {
    return view('public.about');
});
Route::get('/contact', function () {
    return view('public.contact');
});
Route::get('/campaign-card', function () {
    return view('components.campaign-card');
});
