<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/services', function () {
    return view('frontend.services');
})->name('services');

Route::get('/flavors', function () {
    return view('frontend.flavors');
})->name('flavors');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/faq', function () {
    return view('frontend.faq');
});

Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/register', function () {
    return view('frontend.register');
});

Route::get('/cart', function () {
    return view('frontend.cart');
})->name('cart');

Route::get('/shop', function () {
    return view('frontend.shop');
})->name('shop');
