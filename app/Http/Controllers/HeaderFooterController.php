<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderFooterController extends Controller
{
    public function getHeaderContent()
    {

        $headerContent = 'Ez a fejléc dinamikus tartalma';

        return view('layouts.app', compact('headerContent'));
    }

    public function getFooterContent()
    {

        $footerContent = 'Ez a lábléc dinamikus tartalma';

        return view('layouts.app', compact('footerContent'));
    }
}