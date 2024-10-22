<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurActivityController extends Controller
{
    public function admin_our_activity_english()
    {
        return view('admin.en.our_activity');
    }
}
