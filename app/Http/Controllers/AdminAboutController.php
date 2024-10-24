<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    public function admin_about_english()
    {
        $about_english = About::where('language', 'english')->first();

        return view('admin.en.about', compact('about_english'));
    }

    public function admin_about_french()
    {
        $about_french = About::where('language', 'french')->first();

        return view('admin.fr.about', compact('about_french'));
    }

    public function admin_about_arabic()
    {
        $about_arabic = About::where('language', 'arabic')->first();

        return view('admin.ar.about', compact('about_arabic'));
    }


    public function about_meta_section(Request $request)
    {
        $data = $request->validate([
            'meta_title' => 'required',
            'meta_description' => 'required',
            'canonical' => 'required',
        ]);

        About::updateOrCreate(
            ['language' => $request->language],
            $data
        );

        return back()->with('back-success', 'Meta section updated successfully!');
    }


    public function admin_section_1(Request $request)
    {

        $sec1_image = null;

        // Check if the request has a file and store it
        if ($request->hasFile('sec1_image')) {
            $sec1_image = $request->file('sec1_image')->store('about', 'public');
        }


        About::updateOrCreate(
            ['language' => $request->language],
            [
                'sec1_h1' => $request->sec1_h1,
                'sec1_h2' => $request->sec1_h2,

                'sec1_image' => $sec1_image,
            ]
        );

        // Redirect back with a success message
        return back()->with('back-success', 'Section 1 updated successfully!');
    }


    public function admin_section_2(Request $request)
    {

        $about = About::where('language', $request->language)->first();

        $sec2_image = $about ? $about->sec2_image : null;
        if ($request->hasFile('sec2_image')) {
            $sec2_image = $request->file('sec2_image')->store('about', 'public');
        }


        About::updateOrCreate(
            ['language' => $request->language],
            [
                'sec2_h1' => $request->sec2_h1,
                'sec2_h2' => $request->sec2_h2,
                'sec2_p1' => $request->sec2_p1,
                'sec2_p2' => $request->sec2_p2,
                'sec2_p3' => $request->sec2_p3,

                'sec2_image' => $sec2_image,
            ]
        );

        // Redirect back with a success message
        return back()->with('back-success', 'Section 2 updated successfully!');
    }

    public function admin_section_3(Request $request)
    {
        $about = About::where('language', $request->language)->first();

        $sec3_image = $about ? $about->sec3_image : null;
        if ($request->hasFile('sec3_image')) {
            $sec3_image = $request->file('sec3_image')->store('about', 'public');
        }


        About::updateOrCreate(
            ['language' => $request->language],
            [
                'sec3_h1' => $request->sec3_h1,
                'sec3_h2' => $request->sec3_h2,
                'sec3_p1' => $request->sec3_p1,
                'sec3_p2' => $request->sec3_p2,
                'sec3_h3' => $request->sec3_h3,
                'sec3_h4' => $request->sec3_h4,

                'sec3_image' => $sec3_image,
            ]
        );

        // Redirect back with a success message
        return back()->with('back-success', 'Section 3 updated successfully!');
    }
}
