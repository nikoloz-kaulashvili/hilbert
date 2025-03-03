<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function main()
    {
        return view('website.components.main');
    }
    public function services()
    {
        return view('website.components.services');
    }
    public function works()
    {
        return view('website.components.works');
    }
    public function contact()
    {
        return view('website.components.contact');
    }
}
