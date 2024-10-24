<?php

namespace App\Http\Controllers;

use App\Models\OurActivity;
use App\Models\OurActivityPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OurActivityController extends Controller
{
    public function admin_our_activity_english()
    {
        $our_activities = OurActivity::where('language', 'english')->get();
        $activity_page = OurActivityPage::where('language', 'english')->first();
        return view('admin.en.activities', compact('our_activities', 'activity_page'));
    }

    public function admin_our_activity_arabic()
    {
        $our_activities = OurActivity::where('language', 'arabic')->get();
        $activity_page = OurActivityPage::where('language', 'arabic')->first();
        return view('admin.ar.activities', compact('our_activities', 'activity_page'));
    }

    public function admin_our_activity_french()
    {
        $our_activities = OurActivity::where('language', 'french')->get();
        $activity_page = OurActivityPage::where('language', 'french')->first();
        return view('admin.fr.activities', compact('our_activities', 'activity_page'));
    }


    public function admin_our_activity_meta(Request $request)
    {
        $data = $request->validate([
            'meta_title' => 'required',
            'meta_description' => 'required',
            'canonical' => 'required',
        ]);

        OurActivityPage::updateOrCreate(
            ['language' => $request->language],
            $data
        );


        return back()->with('back-success', 'Meta section updated successfully');
    }

    public function admin_our_activity_banner(Request $request)
    {
        $activity_page = OurActivityPage::where('language', $request->language)->first();

        // If a new image is uploaded, update the image, otherwise keep the existing one
        $banner_image = $activity_page ? $activity_page->banner_image : null;
        if ($request->hasFile('banner_image')) {
            $banner_image = $request->file('banner_image')->store('activity_banner', 'public');
        }

        // Update or create the record
        OurActivityPage::updateOrCreate(
            ['language' => $request->language],
            [
                'banner_h1' => $request->banner_h1,
                'banner_h2' => $request->banner_h2,
                'banner_image' => $banner_image,
            ]
        );

        return back()->with(['back-success' => 'Banner updated successfully']);
    }

    public function admin_our_activity_store(Request $request)
    {
        $request->validate([

            'images' => 'required|array', // Ensure it's an array
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate each image

        ]);
        $imageData = []; // Array to hold image data

        // Check if there are files and store each image
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('event_news_page', 'public'); // Store each image


                $imageData[] = [
                    'url' => asset('storage/' . $path), // Generate URL
                    'name' => $image->getClientOriginalName(), // Get the original name of the image
                ];
            }
        }


        OurActivity::create([

            'language' => $request->language,
            'heading_1' => $request->heading_1,
            'heading_2' => $request->heading_2,
            'paragraph' => $request->paragraph,
            'images' => json_encode($imageData),

        ]);

        return back()->with('back-success', 'Activity Added Successfully');
    }

    public function admin_our_activity_edit($id)
    {
        $activity = OurActivity::find($id);
        return response()->json($activity);  // Send the activity data as JSON
    }


    public function admin_our_activity_update(Request $request)
    {
        // Validate the input
        $request->validate([
            'heading_1' => 'required',
            'heading_2' => 'required',
            'paragraph' => 'required',
        ]);


        $activity = OurActivity::find($request->activity_id);


        if (!$activity) {
            return redirect()->back()->withErrors(['error' => 'Activity not found.']);
        }


        $activity->heading_1 = $request->heading_1;
        $activity->heading_2 = $request->heading_2;
        $activity->paragraph = $request->paragraph;


        $existingImages = json_decode($activity->images, true) ?? [];

        if ($request->has('existing_images')) {

            $removedImages = $request->existing_images;
            $existingImages = array_filter($existingImages, function ($image) use ($removedImages) {
                return !in_array($image['url'], $removedImages);
            });
        }


        if ($request->hasFile('images')) {
            $newImages = [];

            foreach ($request->file('images') as $image) {
                $path = $image->store('images', 'public');
                $newImages[] = ['url' => '/storage/' . $path];
            }


            $existingImages = array_merge($existingImages, $newImages);
        }


        $activity->images = json_encode($existingImages);


        $activity->save();

        return redirect()->back()->with('back-success', 'Activity updated successfully');
    }


    public function admin_our_activity_delete($id)
    {
        OurActivity::destroy($id);
        return back()->with('back-success', 'Activity deleted successfully');
    }
}
