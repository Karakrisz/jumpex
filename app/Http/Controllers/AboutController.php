<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Rólunk',
            'content' => ''
        ];
    
        return view('about.rolunk', $data);
    }

}