<?php

namespace App\Controllers;

use App\Models\User;

class Home extends BaseController
{
    public function index(): string
    {
        $user = new User;
        $data['user'] = $user->findAll();
        return view('body', $data);
    }

    public function resume(): string
    {
        return view('resume');
    }

    public function projects(): string
    {
        return view('projects');
    }

    public function contact(): string
    {
        return view('contact');
    }

    public function testing(): string
    {
        return "ini testing";
    }
}
