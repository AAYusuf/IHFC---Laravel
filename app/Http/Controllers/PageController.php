<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function about()
    {
        return view('about.about');
    }
    public function services()
    {
        return view('services.services');
    }
    // public function halal()
    // {
    //     return view('pages.halal');
    // }
    public function gallery()
    {
        return view('gallery.gallery');
    }
    public function contact()
    {
        return view('contact.contact');
    }
}
