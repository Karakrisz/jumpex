<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Blog',
            'content' => 'Ez egy aloldal tartalma...'
        ];
    
        return view('blog', $data);
    }
    
}