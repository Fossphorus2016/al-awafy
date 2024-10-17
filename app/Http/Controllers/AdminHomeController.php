<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function admin_home()
    {

        return view('admin.en.home_page');
    }
}
