<?php

namespace App\Http\Controllers;
use App\Models\Aboutus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsScreen extends Controller
{
    public function aboutus()
    {
        return view('Aboutus');
    }
}
