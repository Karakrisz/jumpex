<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    public function home($lang = 'hu')
    {
        app()->setLocale($lang);
        return view('welcome');
    }

    public function about($lang = 'hu')
    {
        app()->setLocale($lang);
        $data = [
            'title' => trans('messages.rolunk'),
            'content' => ''
        ];

        return view('about.rolunk', $data);
    }
}