<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data['brand'] = "DAZ";
    $data['routeNow'] = 'home';
    $data['caption'] = 'Dalam Kekuatan yang BADAG Terdapat Tanggung Jawab yang BADAG pula';

    return view('home', $data);
});

Route::get('/store', function() {
    $produk = [
        ['judul' => 'Jasa Web Dinamis', 'harga' => 50000],
        ['judul' => 'Jasa Mobile app', 'harga' => 150000],
        ['judul' => 'Jasa Web Static', 'harga' => 10000],
    ];
    $routeNow = 'store';
    $brand = 'DAZ STORE';

    return view('store', compact('produk', 'routeNow', 'brand'));
});

Route::get('/blogs', function() {
    $blogs = [
        ['judul' => 'Mending MERN', 'topik' => 'coding', 'minread' => '5min'],
        ['judul' => 'IoT Sebagai Solusi Bisnis', 'topik' => 'IoT', 'minread' => '5min'],
        ['judul' => 'M1 atau Intel EVO', 'topik' => 'Teknologi', 'minread' => '10min'],
    ];
    $routeNow = 'blogs';
    $brand = 'DAZ BLOGS';

    return view('blogs', compact('blogs', 'routeNow', 'brand'));
});
