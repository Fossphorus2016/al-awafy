<?php

namespace App\Http\Controllers;

use App\Models\Alawafy;
use App\Models\Alyoum;
use App\Models\Crico;
use Illuminate\Http\Request;

class AdminBrandController extends Controller
{
    public function admin_brand_alawafy()
    {
        $brand_alawafy = Alawafy::where('language', 'english')->first();
        return view('admin.en.brand.alawafy', compact('brand_alawafy'));
    }
    
    public function admin_brand_alawafy_arabic()
    {
        $brand_alawafy = Alawafy::where('language', 'arabic')->first();
        return view('admin.ar.brand.alawafy', compact('brand_alawafy'));
    }

    public function admin_brand_alawafy_french()
    {
        $brand_alawafy = Alawafy::where('language', 'french')->first();
        return view('admin.fr.brand.alawafy', compact('brand_alawafy'));
    }

    public function admin_brand_alyoum()
    {
        $brand_alyoum = Alyoum::where('language', 'english')->first();
        return view('admin.en.brand.alyoum', compact('brand_alyoum'));
    }

    public function admin_brand_alyoum_french()
    {
        $brand_alyoum = Alyoum::where('language', 'french')->first();
        return view('admin.fr.brand.alyoum', compact('brand_alyoum'));
    }

    public function admin_brand_alyoum_arabic()
    {
        $brand_alyoum = Alyoum::where('language', 'arabic')->first();
        return view('admin.ar.brand.alyoum', compact('brand_alyoum'));
    }

    public function admin_brand_crico()
    {
        $brand_crico = Crico::where('language', 'english')->first();
        return view('admin.en.brand.crico', compact('brand_crico'));
    }

    public function admin_brand_crico_french()
    {
        $brand_crico = Crico::where('language', 'french')->first();
        return view('admin.en.brand.crico', compact('brand_crico'));
    }

    public function admin_brand_crico_arabic()
    {
        $brand_crico = Crico::where('language', 'arabic')->first();
        return view('admin.en.brand.crico', compact('brand_crico'));
    }
}
