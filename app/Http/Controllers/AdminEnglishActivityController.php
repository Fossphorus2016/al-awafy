<?php

namespace App\Http\Controllers;

use App\Models\EnglishActivity;
use Illuminate\Http\Request;

class AdminEnglishActivityController extends Controller
{
    public function eng_activity_store(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'paragraph' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust mime types and size as needed
        ]);

        $imageUrls = [];

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('uploads/images', 'public'); // Store in public storage
                $imageUrls[] = [
                    'url' => asset('storage/' . $path),
                    'name' => $image->getClientOriginalName(),
                ];
            }
        }

        // Save the heading, paragraph, and images as JSON in the database
        EnglishActivity::create([
            'heading' => $request->input('heading'),
            'paragraph' => $request->input('paragraph'),
            'images' => json_encode($imageUrls),
        ]);


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
