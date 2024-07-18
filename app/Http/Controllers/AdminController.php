<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function get_contacts()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contact_form', ['contacts' => $contacts]);
    }

    public function contact_delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return back()->with('back-success', 'Contact deleted successfully');
    }

    public function get_news_letter()
    {
        return view('admin.news_letter');
    }
}
