<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\franchise\FranchiseController;
use App\Http\Controllers\customer\CustomerController;

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

Route::get('/loyalty',[HomeController::class,'loyalty'])->name('loyalty');




// franchise
Route::get('/franchise-dashboard',[FranchiseController::class,'franchise_dashboard'])->name('franchise_dashboard');

Route::get('/franchise-customer-reviews',[FranchiseController::class,'franchise_customer_reviews'])->name('franchise_customer_reviews');

Route::get('/franchise-employee-management',[FranchiseController::class,'franchise_employee_management'])->name('franchise_employee_management');

Route::get('/franchise-inventory',[FranchiseController::class,'franchise_inventory'])->name('franchise_inventory');

Route::get('/franchise-order-management',[FranchiseController::class,'franchise_order_management'])->name('franchise_order_management');

Route::get('/franchise-sales-reports',[FranchiseController::class,'franchise_sales_reports'])->name('franchise_sales_reports');

Route::get('/franchise-support',[FranchiseController::class,'franchise_support'])->name('franchise_support');

Route::get('/franchise-promotions',[FranchiseController::class,'franchise_promotions'])->name('franchise_promotions');

Route::get('/franchise-profile',[FranchiseController::class,'franchise_profile'])->name('franchise_profile');



// customer
Route::get('/customer-dashboard',[CustomerController::class,'customer_dashboard'])->name('customer_dashboard');

Route::get('/ticket-management',[CustomerController::class,'customer_ticket_management'])->name('customer_ticket_management');

Route::get('/customer-orders',[CustomerController::class,'customer_orders'])->name('customer_orders');
