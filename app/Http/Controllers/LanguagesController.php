<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    public function home($lang = 'hu')
    {
        app()->setLocale($lang);
        $currentLanguage = app()->getLocale();
        $data = [
            'currentLanguage' => $currentLanguage
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
            'content' => ''
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
            'content' => ''
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
            'content' => ''
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
            'content' => ''
        ];

        return view('requestforproposal.ajanlatkeres', $data);
    }

}