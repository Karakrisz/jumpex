<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Rólunk',
            'content' => 'Ez egy aloldal tartalma...'
        ];
    
        return view('about', $data);
    }
    
}