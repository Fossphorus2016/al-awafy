<?php

namespace App\Http\Controllers;

use App\Models\Alawafy;
use App\Models\Alyoum;
use Illuminate\Http\Request;

class AdminBrandController extends Controller
{
    public function admin_brand_alawafy()
    {
        $brand_alawafy =Alawafy::where('language', 'english')->first();
        return view('admin.en.brand.alawafy',compact('brand_alawafy'));
    }
    public function admin_brand_alawafy_arabic()
    {
        $brand_alawafy =Alawafy::where('language', 'arabic')->first();
        return view('admin.ar.brand.alawafy',compact('brand_alawafy'));
    }
    public function admin_brand_alawafy_french()
    {
        $brand_alawafy =Alawafy::where('language', 'french')->first();
        return view('admin.fr.brand.alawafy',compact('brand_alawafy'));
    }

    public function admin_brand_alyoum()
    {
        $brand_alyoum =Alyoum::where('language', 'english')->first();
        return view('admin.en.brand.alyoum',compact('brand_alyoum'));
    }

    public function admin_brand_crico()
    {

        return view('admin.en.brand.crico');
    }
}
