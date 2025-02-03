<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/product', function () {
    return view('frontend.product');
})->name('product');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/services', function () {
    return view('frontend.services');
})->name('services');

Route::get('/franchise', function () {
    return view('frontend.franchise');
})->name('franchise');

Route::get('/flavors', function () {
    return view('frontend.flavors');
})->name('flavors');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/faqs', function () {
    return view('frontend.faqs');
})->name('faqs');

Route::get('/checkout', function () {
    return view('frontend.checkout');
})->name('checkout');

Route::get('/faq', function () {
    return view('frontend.faq');
})->name('faq');

Route::get('/login', function () {
    return view('frontend.login');
})->name('login');

Route::get('/register', function () {
    return view('frontend.register');
})->name('register');

Route::get('/cart', function () {
    return view('frontend.cart');
})->name('cart');

Route::get('/wishlist', function () {
    return view('frontend.wishlist');
})->name('wishlist');

Route::get('/shop', function () {
    return view('frontend.shop');
})->name('shop');
