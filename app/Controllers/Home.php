<?php

namespace App\Controllers;


class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home | Travelicious'
        ];
        return view('home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About | Travelicious'
        ];
        return view('about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact | Travelicious'
        ];
        return view('contact', $data);
    }
}
