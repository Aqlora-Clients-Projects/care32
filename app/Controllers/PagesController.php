<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class PagesController extends BaseController
{
    public function about()
    {
        return view('pages/about');
    }

    public function doctors()
    {
        return view('pages/doctors');
    }

    public function gallery()
    {
        return view('pages/gallery');
    }

    public function pricing()
    {
        return view('pages/pricing');
    }

    public function reviews()
    {
        return view('pages/reviews');
    }

    public function blog()
    {
        return view('pages/blog');
    }

    public function faq()
    {
        return view('pages/faq');
    }

    public function services()
    {
        return view('pages/services');
    }

    public function contact()
    {
        return view('pages/contact');
    }
}
