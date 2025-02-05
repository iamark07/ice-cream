<?php

namespace App\Http\Controllers\franchise;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FranchiseController extends Controller
{
    public function franchise_dashboard()
   {
    return view('franchise.franchise_dashboard');

   }
    public function franchise_customer_reviews()
   {
    return view('franchise.franchise_customer_reviews');

   }
    public function franchise_employee_management()
   {
    return view('franchise.franchise_employee_management');

   }
    public function franchise_inventory()
   {
    return view('franchise.franchise_inventory');

   }
    public function franchise_order_management()
   {
    return view('franchise.franchise_order_management');

   }
    public function franchise_sales_reports()
   {
    return view('franchise.franchise_sales_reports');

   }
    public function franchise_support()
   {
    return view('franchise.franchise_support');

   }
    public function franchise_promotions()
   {
    return view('franchise.franchise_promotions');

   }
    public function franchise_profile()
   {
    return view('franchise.franchise_profile');

   }

}