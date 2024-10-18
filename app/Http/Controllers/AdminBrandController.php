<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBrandController extends Controller
{
    public function admin_brand_alawafy()
    {

        return view('admin.en.brand.alawafy');
    }

    public function admin_brand_alyoum()
    {

        return view('admin.en.brand.alyoum');
    }

    public function admin_brand_crico()
    {

        return view('admin.en.brand.crico');
    }
}
