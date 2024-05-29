<?php

namespace App\Controllers;

class Latihan extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function cv() 
    {
        return view('body');
    }
}

