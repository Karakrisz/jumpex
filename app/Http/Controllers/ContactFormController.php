<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
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
            'email' => 'required|email'
        ]);

        // Email küldése
        Mail::to('mualimadnan8@gmail.com')->send(new ContactFormMail($data));

        // Átirányítás egy megerősítő oldalra vagy visszajelzés a felhasználónak
        return redirect()->route('contact.create')->with('success', 'Message sent successfully!');
    }
}