<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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








    public function activity_update(Request $request)
    {


        $empty = Activity::findOrFail($request->activity);


        $empty->heading = $request->heading;
        $empty->paragraph = $request->paragraph;


        // Handle image upload
        if ($request->hasFile('main_image')) {
            $imagePath = $request->file('main_image')->store('activity', 'public');
            $empty->main_image = $imagePath;
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
        $empty->save();


        return redirect()->back()->with('back-success', 'Updated successfully.');
    }





    // public function empty_Modal_delete($id)
    // {
    //     $card = HomeEmptyCard::find($id);
    //     $card->delete($id);
    //     return back()->with('back-success', 'Deleted successfully');
    // }
}
