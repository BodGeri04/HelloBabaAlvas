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

            Log::info('Request validated successfully', $validated);

            // Email küldése neked
            Mail::to('bodge04@gmail.com')->send(new ContactMessage($validated));
            Log::info('Email to owner sent successfully');

            // Email visszaigazolás a felhasználónak
            Mail::to($validated['email'])->send(new ContactAutoReply($validated));
            Log::info('Auto-reply sent successfully');

            return redirect()->back()->with('success', 'Az üzeneted sikeresen elküldve!');
        } catch (\Exception $e) {
            // Hiba naplózása
            Log::error('Email sending failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Hiba történt a levél küldése közben!');
        }
    }
}
