<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'NSGR Development', 
        'description' => 'Website portofolio tempat kami berkarya, menyediakan layanan jasa pembuatan web, aplikasi android, dan UI Design.',
        'keyword' => 'NSGR Development, jasa buat website, jasa landing page, jasa buat aplikasi, jasa design web, UI Design, application development, software development, jasa design aplikasi',
    ]);
});

Route::get('/ramadan-daily-tracking', function () {
    return view('ramadan', [
        'title' => 'Ramadan Daily Tracking',
        'description' => '',
        'keyword' => 'ramadan daily tracking, ramadan daily, ramadan tracking, ramadhan daily trakcing, aplikasi ramadan, aplikasi ramadhan, ramadan app, ramadhan app'
    ]);
});

Route::get('/article-web', function () {
    return view('article', [
        'title' => 'Article Website',
        'description' => '',
        'keyword' => ''
    ]);
});