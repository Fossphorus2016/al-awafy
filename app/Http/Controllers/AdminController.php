<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function get_contacts(){
        return view('admin.contact_form');
    }

    public function get_news_letter(){
        return view('admin.news_letter');
    }
}
