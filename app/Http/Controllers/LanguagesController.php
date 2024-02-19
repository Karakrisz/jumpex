<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Post;

class LanguagesController extends Controller
{
    public function home($lang = 'hu')
    {
        app()->setLocale($lang);
        $currentLanguage = app()->getLocale();

        $posts = Post::with('category')->latest()->take(3)->get();
        $data = [
            'currentLanguage' => $currentLanguage,
            'posts' => $posts,
        ];
        return view('welcome', $data);
    }

    public function about($lang = 'hu')
    {
        app()->setLocale($lang);
        $currentLanguage = app()->getLocale();
        $data = [
            'title' => trans('messages.rolunk'),
            'currentLanguage' => $currentLanguage,
            'content' => '',
        ];

        return view('about.rolunk', $data);
    }

    public function references($lang = 'hu')
    {
        app()->setLocale($lang);
        $currentLanguage = app()->getLocale();
        $data = [
            'title' => trans('messages.partnerek'),
            'currentLanguage' => $currentLanguage,
            'content' => '',
        ];

        return view('references.referenciak', $data);
    }

    public function partners($lang = 'hu')
    {
        app()->setLocale($lang);
        $currentLanguage = app()->getLocale();
        $data = [
            'title' => trans('messages.partnerek'),
            'currentLanguage' => $currentLanguage,
            'content' => '',
        ];

        return view('partners.partnerek', $data);
    }

    public function requestforproposal($lang = 'hu')
    {
        app()->setLocale($lang);
        $currentLanguage = app()->getLocale();
        $data = [
            'title' => trans('messages.partnerek'),
            'currentLanguage' => $currentLanguage,
            'content' => '',
        ];

        return view('requestforproposal.ajanlatkeres', $data);
    }

}