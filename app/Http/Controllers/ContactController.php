<?php

namespace App\Http\Controllers;

use App\Mail\ContactAutoReply;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


class ContactController extends Controller
{
    public function send(Request $request)
    {
        try {
            // Validáció
            $validated = $request->validate([
                'username' => 'required|string|max:255',
                'email' => 'required|email',
                'product' => 'required|string',
                'message' => 'nullable|string',
            ]);

            // Email küldése neked
            Mail::to('bodge04@gmail.com')->send(new ContactMessage($validated));

            // Email visszaigazolás a felhasználónak
            Mail::to($validated['email'])->send(new ContactAutoReply($validated));

            return redirect()->back()->with('success', 'Az üzeneted sikeresen elküldve!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Hiba történt a levél küldése közben!');
        }
    }
}
