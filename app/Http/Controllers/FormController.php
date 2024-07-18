<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class FormController extends Controller
{
   public function contact_create(Request $request){
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'phone' =>'required',
            'subject' =>'required',
            'message' =>'required',

        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return back();
   }
}
