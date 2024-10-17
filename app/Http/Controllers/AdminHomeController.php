<?php

namespace App\Http\Controllers;

use App\Models\EnglishActivity;
use App\Models\Home;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function admin_home()
    {
        $home_english = Home::where('language', 'english')->first();

        $english_activities = EnglishActivity::latest()->get();


        return view('admin.en.home_page', compact('home_english','english_activities'));
    }


    public function english_meta_section(Request $request)
    {
        // Validate the request inputs
        $request->validate([
            'meta_title' => 'required',
            'meta_description' => 'required',
            'canonical' => 'required',
        ]);

        // Find the first home record with the English language
        $home = Home::where('language', 'english')->first();

        if ($home) {
            // Update the fields with the new data if the record exists
            $home->update([
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'canonical' => $request->input('canonical'),
            ]);

            return back()->with('message', 'Meta data updated successfully.');
        } else {
            // Create a new record if none exists
            Home::create([
                'language' => 'english',
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'canonical' => $request->input('canonical'),
            ]);

            return back()->with('message', 'Meta data updated successfully.');
        }
    }


    public function admin_home_banner_1(Request $request)
    {
        // Validate the request inputs
        $request->validate([
            'banner_1_h1' => 'required',
            'banner_1_h2' => 'required',
            'banner_1_p' => 'required',
            // Add image validation rules, e.g., 'banner_1_image' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        // Find the first home record with the English language
        $home = Home::where('language', 'english')->first();

        // Handle the file upload and retain current image if not uploaded
        if ($request->hasFile('banner_1_image')) {
            // Store the uploaded image and get the path
            $banner_1_image = $request->file('banner_1_image')->store('banners', 'public'); // Store in storage/app/public/banners
        } else {
            // Retain the existing image if no new file is uploaded
            $banner_1_image = $home ? $home->banner_1_image : null;
        }

        if ($home) {
            // Update the fields with the new data if the record exists
            $home->update([
                'banner_1_h1' => $request->input('banner_1_h1'),
                'banner_1_h2' => $request->input('banner_1_h2'),
                'banner_1_p' => $request->input('banner_1_p'),
                'banner_1_image' => $banner_1_image, // Save the image path
            ]);

            return back()->with('message', 'Banner 1 updated successfully.');
        } else {
            // Create a new record if none exists
            Home::create([
                'language' => 'english',
                'banner_1_h1' => $request->input('banner_1_h1'),
                'banner_1_h2' => $request->input('banner_1_h2'),
                'banner_1_p' => $request->input('banner_1_p'),
                'banner_1_image' => $banner_1_image, // Save the image path
            ]);

            return back()->with('message', 'Banner 1 created successfully.');
        }
    }

    public function admin_home_banner_2(Request $request)
    {
        // Validate the request inputs
        $request->validate([
            'banner_2_h1' => 'required',
            'banner_2_h2' => 'required',
            'banner_2_p' => 'required',
            // Add image validation rules
        ]);

        // Find the first home record with the English language
        $home = Home::where('language', 'english')->first();

        // Handle the file upload and retain current image if not uploaded
        if ($request->hasFile('banner_2_image')) {
            $banner_2_image = $request->file('banner_2_image')->store('banners', 'public');
        } else {
            $banner_2_image = $home ? $home->banner_2_image : null;
        }

        if ($home) {
            $home->update([
                'banner_2_h1' => $request->input('banner_2_h1'),
                'banner_2_h2' => $request->input('banner_2_h2'),
                'banner_2_p' => $request->input('banner_2_p'),
                'banner_2_image' => $banner_2_image,
            ]);

            return back()->with('message', 'Banner 2 updated successfully.');
        } else {
            Home::create([
                'language' => 'english',
                'banner_2_h1' => $request->input('banner_2_h1'),
                'banner_2_h2' => $request->input('banner_2_h2'),
                'banner_2_p' => $request->input('banner_2_p'),
                'banner_2_image' => $banner_2_image,
            ]);

            return back()->with('message', 'Banner 2 created successfully.');
        }
    }

    public function admin_home_banner_3(Request $request)
    {
        // Validate the request inputs
        $request->validate([
            'banner_3_h1' => 'required',
            'banner_3_h2' => 'required',
            'banner_3_p' => 'required',
            // Add image validation rules
        ]);

        // Find the first home record with the English language
        $home = Home::where('language', 'english')->first();

        // Handle the file upload and retain current image if not uploaded
        if ($request->hasFile('banner_3_image')) {
            $banner_3_image = $request->file('banner_3_image')->store('banners', 'public');
        } else {
            $banner_3_image = $home ? $home->banner_3_image : null;
        }

        if ($home) {
            $home->update([
                'banner_3_h1' => $request->input('banner_3_h1'),
                'banner_3_h2' => $request->input('banner_3_h2'),
                'banner_3_p' => $request->input('banner_3_p'),
                'banner_3_image' => $banner_3_image,
            ]);

            return back()->with('message', 'Banner 3 updated successfully.');
        } else {
            Home::create([
                'language' => 'english',
                'banner_3_h1' => $request->input('banner_3_h1'),
                'banner_3_h2' => $request->input('banner_3_h2'),
                'banner_3_p' => $request->input('banner_3_p'),
                'banner_3_image' => $banner_3_image,
            ]);

            return back()->with('message', 'Banner 3 created successfully.');
        }
    }




    public function admin_home_about(Request $request)
    {

        $request->validate([
            'about_section_h_blue' => 'required',
            'about_section_h_green' => 'required',
            'about_section_h_small' => 'required',
            'about_section_p' => 'required',
            'about_section_url' => 'required',

        ]);


        $home = Home::where('language', 'english')->first();


        $about_section_image = null;


        if ($request->hasFile('about_section_image')) {

            $about_section_image = $request->file('about_section_image')->store('home', 'public');
        }

        if ($home) {

            $home->update([
                'about_section_h_blue' => $request->input('about_section_h_blue'),
                'about_section_h_green' => $request->input('about_section_h_green'),
                'about_section_h_small' => $request->input('about_section_h_small'),
                'about_section_p' => $request->input('about_section_p'),
                'about_section_url' => $request->input('about_section_url'),

                'about_section_image' => $about_section_image ?? $home->about_section_image,
            ]);

            return back()->with('message', 'Updated successfully.');
        } else {
            // Create a new record if none exists
            Home::create([
                'language' => 'english',
                'about_section_h_blue' => $request->input('about_section_h_blue'),
                'about_section_h_green' => $request->input('about_section_h_green'),
                'about_section_h_small' => $request->input('about_section_h_small'),
                'about_section_p' => $request->input('about_section_p'),
                'about_section_url' => $request->input('about_section_url'),
                // Save the image path if provided
                'about_section_image' => $about_section_image,
            ]);

            return back()->with('message', 'Created successfully.');
        }
    }

    public function admin_home_our_value(Request $request)
    {
        // Validate the request inputs
        $request->validate([
            'our_value_1' => 'required',
            'our_value_2' => 'required',
            'our_value_3' => 'required',
            // Add image validation rules if needed
        ]);

        // Find the first home record with the English language
        $home = Home::where('language', 'english')->first();

        // Initialize image variables
        $our_value_1_image = null;
        $our_value_2_image = null;
        $our_value_3_image = null;

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

        if ($home) {

            $home->update([
                'our_value_1' => $request->input('our_value_1'),
                'our_value_2' => $request->input('our_value_2'),
                'our_value_3' => $request->input('our_value_3'),
                // Only update the images if new ones have been uploaded
                'our_value_1_image' => $our_value_1_image ?? $home->our_value_1_image,
                'our_value_2_image' => $our_value_2_image ?? $home->our_value_2_image,
                'our_value_3_image' => $our_value_3_image ?? $home->our_value_3_image,
            ]);

            return back()->with('message', 'Updated successfully.');
        } else {
            // Create a new record if none exists
            Home::create([
                'language' => 'english',
                'our_value_1' => $request->input('our_value_1'),
                'our_value_2' => $request->input('our_value_2'),
                'our_value_3' => $request->input('our_value_3'),
                // Save the image paths if provided
                'our_value_1_image' => $our_value_1_image,
                'our_value_2_image' => $our_value_2_image,
                'our_value_3_image' => $our_value_3_image,
            ]);

            return back()->with('message', 'Created successfully.');
        }
    }

    public function admin_home_section_6(Request $request)
    {
        $request->validate([
            'section_6_h1' => 'required',
            'section_6_h2' => 'required',
            'section_6_h3' => 'required',
            'section_6_url_1' => 'required',
            'section_6_url_2' => 'required',
        ]);

        // Find the first home record with the English language
        $home = Home::where('language', 'english')->first();

        if ($home) {
            // Update the fields with the new data if the record exists
            $home->update([
                'section_6_h1' => $request->input('section_6_h1'),
                'section_6_h2' => $request->input('section_6_h2'),
                'section_6_h3' => $request->input('section_6_h3'),
                'section_6_url_1' => $request->input('section_6_url_1'),
                'section_6_url_2' => $request->input('section_6_url_2'),

            ]);

            return back()->with('message', 'Meta data updated successfully.');
        } else {
            // Create a new record if none exists
            Home::create([
                'language' => 'english',
                'section_6_h1' => $request->input('section_6_h1'),
                'section_6_h2' => $request->input('section_6_h2'),
                'section_6_h3' => $request->input('section_6_h3'),
                'section_6_url_1' => $request->input('section_6_url_1'),
                'section_6_url_2' => $request->input('section_6_url_2'),

            ]);

            return back()->with('message', 'Meta data updated successfully.');
        }
    }

    public function admin_home_our_brand_1(Request $request)
    {
        $request->validate([
            'our_brand_1' => 'required',

            // Add image validation rules if needed
        ]);

        // Find the first home record with the English language
        $home = Home::where('language', 'english')->first();

        // Initialize image variables
        $our_brand_image_1 = null;
        $our_brand_logo_1 = null;

        if ($request->hasFile('our_brand_image_1')) {
            $our_brand_image_1 = $request->file('our_brand_image_1')->store('home', 'public');
        }

        if ($request->hasFile('our_brand_logo_1')) {
            $our_brand_logo_1 = $request->file('our_brand_logo_1')->store('home', 'public');
        }


        if ($home) {

            $home->update([
                'our_brand_1' => $request->input('our_brand_1'),
                'our_brand_image_1' => $our_brand_image_1 ?? $home->our_brand_image_1,
                'our_brand_logo_1' => $our_brand_logo_1 ?? $home->our_brand_logo_1,
            ]);

            return back()->with('message', 'Updated successfully.');
        } else {
            Home::create([
                'language' => 'english',

                'our_brand_1' => $request->input('our_brand_1'),

                'our_brand_image_1' => $our_brand_image_1,
                'our_brand_logo_1' => $our_brand_logo_1,

            ]);

            return back()->with('message', 'Created successfully.');
        }
    }

    public function admin_home_our_brand_2(Request $request)
    {
        $request->validate([
            'our_brand_2' => 'required',

        ]);

        $home = Home::where('language', 'english')->first();
        // Initialize image variables
        $our_brand_image_2 = null;
        $our_brand_logo_2 = null;

        if ($request->hasFile('our_brand_image_2')) {
            $our_brand_image_2 = $request->file('our_brand_image_2')->store('home', 'public');
        }

        if ($request->hasFile('our_brand_logo_2')) {
            $our_brand_logo_2 = $request->file('our_brand_logo_2')->store('home', 'public');
        }


        if ($home) {
            $home->update([
                'our_brand_2' => $request->input('our_brand_2'),
                'our_brand_image_2' => $our_brand_image_2 ?? $home->our_brand_image_2,
                'our_brand_logo_2' => $our_brand_logo_2 ?? $home->our_brand_logo_2,
            ]);
            return back()->with('message', 'Updated successfully.');
        } else {
            Home::create([
                'language' => 'english',
                'our_brand_2' => $request->input('our_brand_2'),
                'our_brand_image_2' => $our_brand_image_2,
                'our_brand_logo_2' => $our_brand_logo_2,
            ]);

            return back()->with('message', 'Created successfully.');
        }
    }

    public function admin_home_our_brand_3(Request $request)
    {
        $request->validate([
            'our_brand_3' => 'required',

        ]);

        $home = Home::where('language', 'english')->first();
        // Initialize image variables
        $our_brand_image_3 = null;
        $our_brand_logo_3 = null;

        if ($request->hasFile('our_brand_image_3')) {
            $our_brand_image_3 = $request->file('our_brand_image_3')->store('home', 'public');
        }

        if ($request->hasFile('our_brand_logo_3')) {
            $our_brand_logo_3 = $request->file('our_brand_logo_3')->store('home', 'public');
        }


        if ($home) {
            $home->update([
                'our_brand_3' => $request->input('our_brand_3'),
                'our_brand_image_3' => $our_brand_image_3 ?? $home->our_brand_image_3,
                'our_brand_logo_3' => $our_brand_logo_3 ?? $home->our_brand_logo_3,
            ]);
            return back()->with('message', 'Updated successfully.');
        } else {
            Home::create([
                'language' => 'english',
                'our_brand_3' => $request->input('our_brand_3'),
                'our_brand_image_3' => $our_brand_image_3,
                'our_brand_logo_3' => $our_brand_logo_3,
            ]);

            return back()->with('message', 'Created successfully.');
        }
    }
}
