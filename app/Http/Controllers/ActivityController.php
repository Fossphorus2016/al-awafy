<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function activity_store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'heading' => 'required|string|max:255',
            'paragraph' => 'required|string',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $main_image = null;

        // Handle the main image upload
        if ($request->hasFile('main_image')) {
            $main_image = $request->file('main_image')->store('uploads/images', 'public');
        }

        $imageUrls = [];

        // Handle additional images upload
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('uploads/images', 'public');
                $imageUrls[] = [
                    'url' => asset('storage/' . $path),
                    'name' => $image->getClientOriginalName(),
                ];
            }
        }

        // Create the activity record
        Activity::create([
            'language' => $request->language,
            'heading' => $request->input('heading'),
            'paragraph' => $request->input('paragraph'),
            'images' => json_encode($imageUrls),
            'main_image' => $main_image,
        ]);

        // Redirect back with success message
        return back()->with('back-success', 'Created successfully');
    }








    // public function empty_Modal_update(Request $request)
    // {


    //     $empty = HomeEmptyCard::findOrFail($request->update_empty_id);


    //     $empty->empty_modal_heading = $request->empty_modal_heading;
    //     $empty->empty_modal_paragraph = $request->empty_modal_paragraph;
    //     $empty->empty_modal_image_alt = $request->empty_modal_image_alt;

    //     // Handle image upload
    //     if ($request->hasFile('empty_modal_image')) {
    //         $imagePath = $request->file('empty_modal_image')->store('home_page', 'public');
    //         $empty->empty_modal_image = $imagePath;
    //     }


    //     $empty->save();


    //     return redirect()->back()->with('back-success', 'Updated successfully.');
    // }


    // public function empty_Modal_delete($id)
    // {
    //     $card = HomeEmptyCard::find($id);
    //     $card->delete($id);
    //     return back()->with('back-success', 'Deleted successfully');
    // }
}
