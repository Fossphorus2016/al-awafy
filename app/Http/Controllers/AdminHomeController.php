<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\EnglishActivity;
use App\Models\Home;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function admin_home_english()
    {
        $home_english = Home::where('language', 'english')->first();

        // Fetch the activities for the English language
        $activities = Activity::where('language', 'english')->get();

        return view('admin.en.home_page', compact('home_english', 'activities'));
    }


    public function admin_home_french()
    {
        $home_french = Home::where('language', 'french')->first();

        $activities =  Activity::where('language', 'french')->get();


        return view('admin.fr.home_page', compact('home_french', 'activities'));
    }

    public function admin_home_arabic()
    {
        $home_arabic = Home::where('language', 'arabic')->first();

        $activities =  Activity::where('language', 'arabic')->get();


        return view('admin.ar.home_page', compact('home_arabic', 'activities'));
    }




    public function  meta_section(Request $request)
    {


        $data = $request->validate([
            'meta_title' => 'required',
            'meta_description' => 'required',
            'canonical' => 'required',
        ]);

        Home::updateOrCreate(
            ['language' => $request->language], // Conditions to find the record
            $data // Fields to update or create
        );


        return back()->with('back-success', 'Meta section updated successfully');
    }


    public function admin_banner_1(Request $request)
    {
        $home = Home::where('language', $request->language)->first();

        // If a new image is uploaded, update the image, otherwise keep the existing one
        $banner_1_image = $home ? $home->banner_1_image : null;
        if ($request->hasFile('banner_1_image')) {
            $banner_1_image = $request->file('banner_1_image')->store('banners', 'public');
        }

        // Update or create the record
        Home::updateOrCreate(
            ['language' => $request->language],
            [
                'banner_1_h1' => $request->banner_1_h1,
                'banner_1_h2' => $request->banner_1_h2,
                'banner_1_p1' => $request->banner_1_p1,
                'banner_1_p2' => $request->banner_1_p2,
                'banner_1_image' => $banner_1_image,
            ]
        );

        return back()->with(['message' => 'Banner updated successfully']);
    }



    public function admin_banner_2(Request $request)
    {
        $home = Home::where('language', $request->language)->first();

        // Check if the request has a file and store it
        $banner_2_image = $home ? $home->banner_2_image : null;
        if ($request->hasFile('banner_2_image')) {
            $banner_2_image = $request->file('banner_2_image')->store('banners', 'public');
        }


        Home::updateOrCreate(
            ['language' => $request->language],
            [
                'banner_2_h1' => $request->banner_2_h1,
                'banner_2_h2' => $request->banner_2_h2,
                'banner_2_p1' => $request->banner_2_p1,
                'banner_2_p2' => $request->banner_2_p2,
                'banner_2_image' => $banner_2_image,
            ]
        );

        return back()->with(['message' => 'Banner updated successfully']);
    }

    public function admin_banner_3(Request $request)
    {
        $home = Home::where('language', $request->language)->first();

        // Check if the request has a file and store it
        $banner_3_image = $home ? $home->banner_3_image : null;
        // Check if the request has a file and store it
        if ($request->hasFile('banner_3_image')) {
            $banner_3_image = $request->file('banner_3_image')->store('banners', 'public');
        }


        Home::updateOrCreate(
            ['language' => $request->language],
            [
                'banner_3_h1' => $request->banner_3_h1,
                'banner_3_h2' => $request->banner_3_h2,
                'banner_3_p1' => $request->banner_3_p1,
                'banner_3_p2' => $request->banner_3_p2,
                'banner_3_image' => $banner_3_image,
            ]
        );

        // Optionally return a response or redirect
        return back()->with(['message' => 'Banner updated successfully']);
    }




    public function admin_about(Request $request)
    {
        $request->validate([
            'about_section_h_blue' => 'required',
            'about_section_h_green' => 'required',
            'about_section_h_small' => 'required',
            'about_section_p' => 'required',
            'about_section_url' => 'required',
        ]);

        $home = Home::where('language', $request->language)->first();

        // If a new image is uploaded, update the image, otherwise keep the existing one
        $about_section_image = $home ? $home->about_section_image : null;
        if ($request->hasFile('about_section_image')) {
            $about_section_image = $request->file('about_section_image')->store('home', 'public');
        }

        Home::updateOrCreate(
            ['language' => $request->language],
            [
                'about_section_h_blue' => $request->about_section_h_blue,
                'about_section_h_green' => $request->about_section_h_green,
                'about_section_h_small' => $request->about_section_h_small,
                'about_section_p' => $request->about_section_p,
                'about_section_url' => $request->about_section_url,
                'about_section_image' => $about_section_image,
            ]
        );

        return back()->with(['message' => 'Updated successfully']);
    }


    public function admin_our_value(Request $request)
    {
        // Validate the request inputs
        $request->validate([
            'our_value_h1' => 'required',
            'our_value_h2' => 'required',
            'our_value_1' => 'required',
            'our_value_2' => 'required',
            'our_value_3' => 'required',

        ]);
        $home = Home::where('language', $request->language)->first();

        // If a new image is uploaded, update the image, otherwise keep the existing one
        $our_value_1_image = $home ? $home->our_value_1_image : null;
        $our_value_2_image = $home ? $home->our_value_2_image : null;
        $our_value_3_image = $home ? $home->our_value_3_image : null;





        // Handle the file uploads
        if ($request->hasFile('our_value_1_image')) {
            $our_value_1_image = $request->file('our_value_1_image')->store('home', 'public');
        }

        if ($request->hasFile('our_value_2_image')) {
            $our_value_2_image = $request->file('our_value_2_image')->store('home', 'public');
        }

        if ($request->hasFile('our_value_3_image')) {
            $our_value_3_image = $request->file('our_value_3_image')->store('home', 'public');
        }

        Home::updateOrCreate(
            ['language' => $request->language],
            [
                'our_value_1' => $request->our_value_1,
                'our_value_2' => $request->our_value_2,
                'our_value_h1' => $request->our_value_h1,
                'our_value_h2' => $request->our_value_h2,
                'our_value_3' => $request->our_value_3,

                'our_value_1_image' => $our_value_1_image,
                'our_value_2_image' => $our_value_2_image,
                'our_value_3_image' => $our_value_3_image,
            ]
        );

        return back()->with(['message' => 'Updated successfully']);
    }

    public function admin_section_6(Request $request)
    {
        $request->validate([
            'section_6_h1' => 'required',
            'section_6_h2' => 'required',
            'section_6_h3' => 'required',
            'section_6_url_1' => 'required',
            'section_6_url_2' => 'required',
        ]);

        Home::updateOrCreate(
            ['language' => $request->language],
            [
                'section_6_h1' => $request->section_6_h1,
                'section_6_h2' => $request->section_6_h2,
                'section_6_h3' => $request->section_6_h3,
                'section_6_url_1' => $request->section_6_url_1,
                'section_6_url_2' => $request->section_6_url_2,

            ]
        );

        return back()->with('message', 'Updated successfully');
    }

    public function admin_our_brand_1(Request $request)
    {
        $request->validate([
            'our_brand_1' => 'required',


        ]);

        $home = Home::where('language', $request->language)->first();

        $our_brand_image_1 = $home ? $home->our_brand_image_1 : null;
        $our_brand_logo_1 = $home ? $home->our_brand_logo_1 : null;

        if ($request->hasFile('our_brand_image_1')) {
            $our_brand_image_1 = $request->file('our_brand_image_1')->store('home', 'public');
        }

        if ($request->hasFile('our_brand_logo_1')) {
            $our_brand_logo_1 = $request->file('our_brand_logo_1')->store('home', 'public');
        }


        Home::updateOrCreate(
            ['language' => $request->language],
            [
                'our_brand_1' => $request->our_brand_1,

                'our_brand_image_1' => $our_brand_image_1,
                'our_brand_logo_1' => $our_brand_logo_1,
            ]
        );

        return back()->with('message', 'created successfully');
    }

    public function admin_our_brand_2(Request $request)
    {
        $request->validate([
            'our_brand_2' => 'required',


        ]);

        $home = Home::where('language', $request->language)->first();

        $our_brand_image_2 = $home ? $home->our_brand_image_2 : null;
        $our_brand_logo_2 = $home ? $home->our_brand_logo_2 : null;


        if ($request->hasFile('our_brand_image_2')) {
            $our_brand_image_2 = $request->file('our_brand_image_2')->store('home', 'public');
        }

        if ($request->hasFile('our_brand_logo_2')) {
            $our_brand_logo_2 = $request->file('our_brand_logo_2')->store('home', 'public');
        }


        Home::updateOrCreate(
            ['language' => $request->language],
            [
                'our_brand_2' => $request->our_brand_2,

                'our_brand_image_2' => $our_brand_image_2,
                'our_brand_logo_2' => $our_brand_logo_2,
            ]
        );

        return back()->with('message', 'created successfully');
    }

    public function admin_our_brand_3(Request $request)
    {
        $request->validate([
            'our_brand_3' => 'required',


        ]);


        $home = Home::where('language', $request->language)->first();

        $our_brand_image_3 = $home ? $home->our_brand_image_3 : null;
        $our_brand_logo_3 = $home ? $home->our_brand_logo_3 : null;

        if ($request->hasFile('our_brand_image_3')) {
            $our_brand_image_3 = $request->file('our_brand_image_3')->store('home', 'public');
        }

        if ($request->hasFile('our_brand_logo_3')) {
            $our_brand_logo_3 = $request->file('our_brand_logo_3')->store('home', 'public');
        }


        Home::updateOrCreate(
            ['language' => $request->language],
            [
                'our_brand_3' => $request->our_brand_3,

                'our_brand_image_3' => $our_brand_image_3,
                'our_brand_logo_3' => $our_brand_logo_3,
            ]
        );

        return back()->with('message', 'created successfully');
    }
}
