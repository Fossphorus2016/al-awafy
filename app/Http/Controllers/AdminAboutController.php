<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    public function admin_about()
    {

        return view('admin.en.about');
    }
}
