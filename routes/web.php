<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;

Route::get('/', function () {
    return view('frontend.home');
});

// frontend routes
Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/product',[HomeController::class,'product'])->name('product');

Route::get('/about',[HomeController::class,'about'])->name('about');

Route::get('/services',[HomeController::class,'services'])->name('services');

Route::get('/franchise',[HomeController::class,'franchise'])->name('franchise');

Route::get('/flavors',[HomeController::class,'flavors'])->name('flavors');

Route::get('/contact',[HomeController::class,'contact'])->name('contact');

Route::get('/search',[HomeController::class,'search'])->name('search');

Route::get('/faqs',[HomeController::class,'faqs'])->name('faqs');

Route::get('/checkout',[HomeController::class,'checkout'])->name('checkout');

Route::get('/reset-password',[HomeController::class,'reset_password'])->name('reset_password');

Route::get('/forget-password',[HomeController::class,'forget_password'])->name('forget_password');

Route::get('/login',[HomeController::class,'login'])->name('login');

Route::get('/register',[HomeController::class,'register'])->name('register');

Route::get('/cart',[HomeController::class,'cart'])->name('cart');

Route::get('/wishlist',[HomeController::class,'wishlist'])->name('wishlist');

Route::get('/shop',[HomeController::class,'shop'])->name('shop');

Route::get('/profile',[HomeController::class,'userprofile'])->name('profile');

Route::get('/order-history',[HomeController::class,'order_history'])->name('order_history');
