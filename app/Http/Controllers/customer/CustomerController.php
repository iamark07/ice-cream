<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
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
    public function customer_complaint()
   {
    return view('customer.customer_complaint');

   }
    public function customer_faqs_management()
   {
    return view('customer.customer_faqs_management');

   }
    public function customer_performance_reports()
   {
    return view('customer.customer_performance_reports');

   }
    public function customer_live_chat()
   {
    return view('customer.customer_live_chat');

   }
}