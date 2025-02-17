<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\franchise\FranchiseController;
use App\Http\Controllers\customer\CustomerController;
use App\Http\Controllers\admin\AdminController;

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

Route::get('/ticket-management',[CustomerController::class,'customer_ticket_management'])->name('customer_ticket_management');

Route::get('/customer-orders',[CustomerController::class,'customer_orders'])->name('customer_orders');

Route::get('/franchise-support',[CustomerController::class,'franchise_support'])->name('franchise_support');

Route::get('/customer-complaint',[CustomerController::class,'customer_complaint'])->name('customer_complaint');

Route::get('/performance-reports',[CustomerController::class,'customer_performance_reports'])->name('customer_performance_reports');

Route::get('/faqs-management',[CustomerController::class,'customer_faqs_management'])->name('customer_faqs_management');

Route::get('/live-chat',[CustomerController::class,'customer_live_chat'])->name('customer_live_chat');



// admin 
Route::get('/admin-dashboard',[AdminController::class,'admin_dashboard'])->name('admin_dashboard');

Route::get('/admin-users',[AdminController::class,'admin_users'])->name('admin_users');
Route::get('/add-users',[AdminController::class,'add_users'])->name('add_users');
Route::get('/edit-users',[AdminController::class,'edit_users'])->name('edit_users');
Route::get('/delete-users',[AdminController::class,'delete_users'])->name('delete_users');

Route::get('/admin-orders',[AdminController::class,'admin_orders'])->name('admin_orders');

Route::get('/admin-product',[AdminController::class,'admin_product'])->name('admin_product');
Route::get('/add-product',[AdminController::class,'add_product'])->name('add_product');
Route::get('/edit-product',[AdminController::class,'edit_product'])->name('edit_product');
Route::get('/delete-product',[AdminController::class,'delete_product'])->name('delete_product');

Route::get('/admin-franchise',[AdminController::class,'admin_franchise'])->name('admin_franchise');
Route::get('/add-franchise',[AdminController::class,'add_franchise'])->name('add_franchise');
Route::get('/edit-franchise',[AdminController::class,'edit_franchise'])->name('edit_franchise');

// promotions
Route::get('/admin-promotions',[AdminController::class,'admin_promotions'])->name('admin_promotions');
Route::get('/new-camapaign',[AdminController::class,'new_camapaign'])->name('new_camapaign');

// admin promtions offers
Route::get('/new-offers',[AdminController::class,'new_offers'])->name('new_offers');
Route::get('/edit-offers',[AdminController::class,'edit_offers'])->name('edit_offers');
Route::get('/delete-offers',[AdminController::class,'delete_offers'])->name('delete_offers');

// admin analytics reports
Route::get('/analytics-reports',[AdminController::class,'admin_reports'])->name('admin_reports');

// cms management
Route::get('/cms-management',[AdminController::class,'admin_cms_management'])->name('admin_cms_management');
Route::get('/seo-marketing',[AdminController::class,'seo_marketing'])->name('seo_marketing');

// admin customer support
Route::get('/admin-customer-support',[AdminController::class,'admin_customer_support'])->name('admin_customer_support');

// admin security
Route::get('/admin-security',[AdminController::class,'admin_security'])->name('admin_security');
