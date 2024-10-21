<?php

namespace App\Http\Controllers;

use App\Models\Alawafy;
use Illuminate\Http\Request;

class AlawafyController extends Controller
{
    public function alawafy_meta_section(Request $request)
    {
        $data = $request->validate([
            'meta_title' => 'required',
            'meta_description' => 'required',
            'canonical' => 'required',
        ]);

        Alawafy::updateOrCreate(
            ['language' => $request->language],
            $data
        );


        return back()->with('back-success', 'Meta section updated successfully');
    }


    public function alawafy_banner_section(Request $request)
    {
        $alawafy = Alawafy::where('language', $request->language)->first();

        // If a new image is uploaded, update the image, otherwise keep the existing one
        $banner_image = $alawafy ? $alawafy->banner_image : null;
        if ($request->hasFile('banner_image')) {
            $banner_image = $request->file('banner_image')->store('banner_brand', 'public');
        }

        // Update or create the record
        Alawafy::updateOrCreate(
            ['language' => $request->language],
            [
                'banner_h1' => $request->banner_h1,
                'banner_h2' => $request->banner_h2,
                'banner_image' => $banner_image,
            ]
        );

        return back()->with(['back-success' => 'Banner updated successfully']);
    }


    public function alawafy_section2(Request $request)
    {
        $alawafy = Alawafy::where('language', $request->language)->first();

        // If a new image is uploaded, update the image, otherwise keep the existing one
        $section1_image = $alawafy ? $alawafy->section1_image : null;
        if ($request->hasFile('section1_image')) {
            $section1_image = $request->file('section1_image')->store('banner_brand', 'public');
        }

        // Update or create the record
        Alawafy::updateOrCreate(
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
}
