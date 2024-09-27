<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\NewsLetter;
use Illuminate\Http\Request;

class FormController extends Controller
{
   public function contact_create(Request $request){

        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'phone' =>'required',
            // 'subject' =>'required',
            'message' =>'required',

        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            // 'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return back()->with('back-success','Contact form submitted');
   }


   public function news_letter_create(Request $request){
        $request->validate([
            'subscriber_mail' => 'required',
        ]);

        NewsLetter::create([
            'subscriber_mail' => $request->subscriber_mail,
        ]);

        return back()->with('back-success','News Letter submitted');
   }
}
