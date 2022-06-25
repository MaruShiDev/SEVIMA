<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | MD Courses',
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me',
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'address' => [
                [
                    'type' => 'home',
                    'address' => 'Meranti street No. 3',
                    'city' => 'Tangerang District',
                ],
                [
                    'type' => 'office',
                    'address' => 'Jalan street No.69',
                    'city' => 'Jakarta',
                ],
            ],
        ];
        return view('pages/contact', $data);
    }
}