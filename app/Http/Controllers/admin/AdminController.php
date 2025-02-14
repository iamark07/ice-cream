<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // admin home dashboard
    public function admin_dashboard()
   {
    return view('admin.admin_dashboard');
    }

    // user management
    public function admin_users()
   {
    return view('admin.users.admin_users');
    }
    public function add_users()
   {
    return view('admin.users.add_users');
    }
    public function edit_users()
   {
    return view('admin.users.edit_users');
    }
    public function delete_users()
   {
    return view('admin.users.delete_users');
    }

    // franchise management
    public function admin_franchise()
   {
    return view('admin.admin_franchise.admin_franchise');
    }
    public function add_franchise()
   {
    return view('admin.admin_franchise.add_franchise');
    }
    public function edit_franchise()
   {
    return view('admin.admin_franchise.edit_franchise');
    }
    
    // product management
    public function admin_product()
   {
    return view('admin.products.admin_product');
    }
    public function add_product()
   {
    return view('admin.products.add_product');
    }
    public function edit_product()
   {
    return view('admin.products.edit_product');
    }
    public function delete_product()
   {
    return view('admin.products.delete_product');
    }
    
    // order management
    public function admin_orders()
   {
    return view('admin.admin_orders');
    }

    // promotion
    public function admin_promotions()
   {
    return view('admin.promotions.admin_promotions');
    }
    public function new_camapaign()
   {
    return view('admin.promotions.new_camapaign');
    }
    public function new_offers()
   {
    return view('admin.promotions.offers.new_offers');
    }
    public function edit_offers()
   {
    return view('admin.promotions.offers.edit_offers');
    }
    public function delete_offers()
   {
    return view('admin.promotions.offers.delete_offers');
    }


    // analytics reports
    public function admin_reports()
   {
    return view('admin.admin_reports');
    }

    // cms management
    public function admin_cms_management()
   {
    return view('admin.website_cms_management.admin_cms_management');
    }

    // seo and marketing
    public function seo_marketing()
   {
    return view('admin.seo_marketing');
    }

    // customer support
    public function admin_customer_support()
   {
    return view('admin.admin_customer_support');
    }

    // security compliance
    public function admin_security()
   {
    return view('admin.admin_security');
    }
}