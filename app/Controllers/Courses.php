<?php

namespace App\Controllers;

use \App\Models\JobsModel;

class Courses extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | MD Courses',
        ];
        return view('/courses/index', $data);
    }
}