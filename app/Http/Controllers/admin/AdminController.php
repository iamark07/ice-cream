<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_dashboard()
   {
    return view('admin.admin_dashboard');
    }
    public function admin_users()
   {
    return view('admin.admin_users');
    }
    public function admin_franchise()
   {
    return view('admin.admin_franchise');
    }
    public function admin_product()
   {
    return view('admin.admin_product');
    }
    public function admin_orders()
   {
    return view('admin.admin_orders');
    }

}