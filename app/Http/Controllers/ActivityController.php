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

        $imageData = []; // Array to hold image data

        // Check if there are files and store each image
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('activities', 'public'); // Store each image

                // Create an associative array with the URL and image name
                $imageData[] = [
                    'url' => asset('storage/' . $path), // Generate URL
                    'name' => $image->getClientOriginalName(), // Get the original name of the image
                ];
            }
        }

        // Create the activity record
        Activity::create([
            'language' => $request->language,
            'heading' => $request->input('heading'),
            'paragraph' => $request->input('paragraph'),
            'images' => json_encode($imageData),
            'main_image' => $main_image,
        ]);

        // Redirect back with success message
        return back()->with('back-success', 'Created successfully');
    }








    public function activity_update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'heading' => 'required|string|max:255',
            'paragraph' => 'required|string',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the existing activity using the ID parameter
        $activity = Activity::findOrFail($id);

        // Update fields
        $activity->heading = $request->heading;
        $activity->paragraph = $request->paragraph;

        // Handle the main image upload if a new one is provided
        if ($request->hasFile('main_image')) {
            // Delete the old main image if it exists
            if ($activity->main_image) {
                Storage::disk('public')->delete($activity->main_image);
            }
            // Store the new main image
            $activity->main_image = $request->file('main_image')->store('uploads/images', 'public');
        }

        // Handle additional images upload if new ones are provided
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('activities', 'public');
                $updatedImages[] = [
                    'url' => asset('storage/' . $path),
                    'name' => $image->getClientOriginalName(),
                ];
            }
        }

        // Save the updated activity
        $activity->save();

        // Redirect back with a success message
        return redirect()->back()->with('back-success', 'Updated successfully.');
    }





    public function activity_delete($id)
    {
        $activity = Activity::find($id);
        $activity->delete($id);
        return back()->with('back-success', 'Deleted successfully');
    }
}
