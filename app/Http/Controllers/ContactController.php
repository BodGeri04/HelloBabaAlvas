<?php

namespace App\Http\Controllers;

use App\Mail\ContactAutoReply;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email',
            'country' => 'required|string',
            'message' => 'nullable|string',
        ]);

        // Email küldése neked
        Mail::to('bodge04@gmail.com')->send(new ContactMessage($validated));

        // Email visszaigazolás a felhasználónak
        Mail::to($validated['email'])->send(new ContactAutoReply($validated));
        return redirect()->back()->with('success', 'Az üzeneted sikeresen elküldve!');
    }
}
