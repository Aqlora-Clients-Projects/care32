<?php

namespace App\Controllers;

class ServicesController extends BaseController
{
    public function services(): string
    {
        return view('services');
    }
}