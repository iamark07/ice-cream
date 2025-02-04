<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
   {
    return view('frontend.home');

   }
    public function about()
   {
    return view('frontend.about');

   }
    public function services()
   {
    return view('frontend.services');

   }
    public function shop()
   {
    return view('frontend.shop');

   }
    public function contact()
   {
    return view('frontend.contact');

   }
    public function flavors()
   {
    return view('frontend.flavors');

   }
    public function cart()
   {
    return view('frontend.cart');

   }
    public function search()
   {
    return view('frontend.search');

   }
    public function wishlist()
   {
    return view('frontend.wishlist');

   }
    public function product()
   {
    return view('frontend.product');

   }
    public function login()
   {
    return view('frontend.login');

   }
   public function reset_password()
   {
    return view('frontend.reset_password');

   }
    public function forget_password()
   {
    return view('frontend.forget_password');

   }
    public function register()
   {
    return view('frontend.register');

   }
    public function franchise()
   {
    return view('frontend.franchise');

   }
    public function checkout()
   {
    return view('frontend.checkout');

   }
    public function faqs()
   {
    return view('frontend.faqs');

   }
    public function userprofile()
   {
    return view('frontend.profile.user_profile.userprofile');

   }
    public function order_history()
   {
    return view('frontend.profile.user_profile.order_history');

   }
   
}
