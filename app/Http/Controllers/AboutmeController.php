<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutmeController extends Controller
{
    public function aboutme()
    {
        return view('aboutme');
    }
}
