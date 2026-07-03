<?php

namespace App\Controllers;

class SecureController extends BaseController
{
    public function contact(): string
    {
        return view('contact');
    }
}
