<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer_dashboard()
   {
    return view('customer.customer_dashboard');

   }
    public function customer_ticket_management()
   {
    return view('customer.customer_ticket_management');

   }
    public function customer_orders()
   {
    return view('customer.customer_orders');

   }
    public function franchise_support()
   {
    return view('customer.franchise_support');

   }
}