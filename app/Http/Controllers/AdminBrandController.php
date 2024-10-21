<?php

namespace App\Http\Controllers;

use App\Models\Alawafy;
use Illuminate\Http\Request;

class AdminBrandController extends Controller
{
    public function admin_brand_alawafy()
    {
        $brand_alawafy =Alawafy::where('language', 'english')->first();
        return view('admin.en.brand.alawafy',compact('brand_alawafy'));
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
