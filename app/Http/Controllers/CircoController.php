<?php

namespace App\Http\Controllers;

use App\Models\Crico;
use Illuminate\Http\Request;

class CircoController extends Controller
{
    public function crico_meta_section(Request $request)
    {

        $data = $request->validate([
            'meta_title' => 'required',
            'meta_description' => 'required',
            'canonical' => 'required',
        ]);

        Crico::updateOrCreate(
            ['language' => $request->language],
            $data
        );

        return back()->with('back-success', 'Meta section updated successfully');
    }


    public function crico_banner_section(Request $request)
    {

        $crico = Crico::where('language', $request->language)->first();

        // If a new image is uploaded, update the image, otherwise keep the existing one
        $banner_image = $crico ? $crico->banner_image : null;
        if ($request->hasFile('banner_image')) {
            $banner_image = $request->file('banner_image')->store('banner_brand', 'public');
        }

        // Update or create the record
        Crico::updateOrCreate(
            ['language' => $request->language],
            [
                'banner_h1' => $request->banner_h1,
                'banner_h2' => $request->banner_h2,
                'banner_image' => $banner_image,
            ]
        );

        return back()->with(['back-success' => 'Banner updated successfully']);
    }


    public function crico_section2(Request $request)
    {
        $crico = Crico::where('language', $request->language)->first();

        // If a new image is uploaded, update the image, otherwise keep the existing one
        $section1_image = $crico ? $crico->section1_image : null;
        if ($request->hasFile('section1_image')) {
            $section1_image = $request->file('section1_image')->store('banner_brand', 'public');
        }

        // Update or create the record
        Crico::updateOrCreate(
            ['language' => $request->language],
            [
                'section1_h1' => $request->section1_h1,
                'section1_h2' => $request->section1_h2,
                'section1_p' => $request->section1_p,

                'section1_image' => $section1_image,
            ]
        );

        return back()->with(['back-success' => 'Banner updated successfully']);
    }


    public function crico_item_1(Request $request)
    {
        $crico = Crico::where('language', $request->language)->first();

        // If a new image is uploaded, update the image, otherwise keep the existing one
        $brand_1_image = $crico ? $crico->brand_1_image : null;
        if ($request->hasFile('brand_1_image')) {
            $brand_1_image = $request->file('brand_1_image')->store('banner_brand', 'public');
        }

        // Update or create the record
        Crico::updateOrCreate(
            ['language' => $request->language],
            [
                'brand_1_h1' => $request->brand_1_h1,
                'brand_1_h2' => $request->brand_1_h2,
                'brand_1_p' => $request->brand_1_p,
                'brand_1_url' => $request->brand_1_url,

                'brand_1_image' => $brand_1_image,
            ]
        );

        return back()->with(['back-success' => 'Banner updated successfully']);
    }

    public function crico_item_2(Request $request)
    {
        $crico = Crico::where('language', $request->language)->first();

        // If a new image is uploaded, update the image, otherwise keep the existing one
        $brand_2_image = $crico ? $crico->brand_2_image : null;
        if ($request->hasFile('brand_2_image')) {
            $brand_2_image = $request->file('brand_2_image')->store('banner_brand', 'public');
        }

        // Update or create the record
        Crico::updateOrCreate(
            ['language' => $request->language],
            [
                'brand_2_h1' => $request->brand_2_h1,
                'brand_2_h2' => $request->brand_2_h2,
                'brand_2_p' => $request->brand_2_p,
                'brand_2_url' => $request->brand_2_url,

                'brand_2_image' => $brand_2_image,
            ]
        );

        return back()->with(['back-success' => 'Banner updated successfully']);
    }

    public function crico_item_3(Request $request)
    {
        $crico = Crico::where('language', $request->language)->first();

        // If a new image is uploaded, update the image, otherwise keep the existing one
        $brand_3_image = $crico ? $crico->brand_3_image : null;
        if ($request->hasFile('brand_3_image')) {
            $brand_3_image = $request->file('brand_3_image')->store('banner_brand', 'public');
        }

        // Update or create the record
        Crico::updateOrCreate(
            ['language' => $request->language],
            [
                'brand_3_h1' => $request->brand_3_h1,
                'brand_3_h2' => $request->brand_3_h2,
                'brand_3_p' => $request->brand_3_p,
                'brand_3_url' => $request->brand_3_url,

                'brand_3_image' => $brand_3_image,
            ]
        );

        return back()->with(['back-success' => 'Banner updated successfully']);
    }

    public function crico_item_4(Request $request)
    {
        $crico = Crico::where('language', $request->language)->first();

        // If a new image is uploaded, update the image, otherwise keep the existing one
        $brand_4_image = $crico ? $crico->brand_4_image : null;
        if ($request->hasFile('brand_4_image')) {
            $brand_4_image = $request->file('brand_4_image')->store('banner_brand', 'public');
        }

        // Update or create the record
        Crico::updateOrCreate(
            ['language' => $request->language],
            [
                'brand_4_h1' => $request->brand_4_h1,
                'brand_4_h2' => $request->brand_4_h2,
                'brand_4_p' => $request->brand_4_p,
                'brand_4_url' => $request->brand_4_url,

                'brand_4_image' => $brand_4_image,
            ]
        );

        return back()->with(['back-success' => 'Banner updated successfully']);
    }

    public function crico_item_5(Request $request)
    {
        $crico = Crico::where('language', $request->language)->first();

        // If a new image is uploaded, update the image, otherwise keep the existing one
        $brand_5_image = $crico ? $crico->brand_5_image : null;
        if ($request->hasFile('brand_5_image')) {
            $brand_5_image = $request->file('brand_5_image')->store('banner_brand', 'public');
        }

        // Update or create the record
        Crico::updateOrCreate(
            ['language' => $request->language],
            [
                'brand_5_h1' => $request->brand_5_h1,
                'brand_5_h2' => $request->brand_5_h2,
                'brand_5_p' => $request->brand_5_p,
                'brand_5_url' => $request->brand_5_url,

                'brand_5_image' => $brand_5_image,
            ]
        );

        return back()->with(['back-success' => 'Banner updated successfully']);
    }

    public function crico_item_6(Request $request)
    {
        $crico = Crico::where('language', $request->language)->first();

        // If a new image is uploaded, update the image, otherwise keep the existing one
        $brand_6_image = $crico ? $crico->brand_6_image : null;
        if ($request->hasFile('brand_6_image')) {
            $brand_6_image = $request->file('brand_6_image')->store('banner_brand', 'public');
        }

        // Update or create the record
        Crico::updateOrCreate(
            ['language' => $request->language],
            [
                'brand_6_h1' => $request->brand_6_h1,
                'brand_6_h2' => $request->brand_6_h2,
                'brand_6_p' => $request->brand_6_p,
                'brand_6_url' => $request->brand_6_url,

                'brand_6_image' => $brand_6_image,
            ]
        );

        return back()->with(['back-success' => 'Banner updated successfully']);
    }
}
