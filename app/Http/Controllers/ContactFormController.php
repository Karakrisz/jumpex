<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        // Űrlapadatok validálása
        $data = $request->validate([
            'company' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        Mail::to('mualimadnan8@gmail.com')->send(new ContactFormMail($data));

        return response()->json(['success' => true, 'message' => 'Üzenet sikeresen elküldve.']);
    }
}