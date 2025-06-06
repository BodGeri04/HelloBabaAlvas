<?php

namespace App\Http\Controllers;

use App\Mail\ContactAutoReply;
use App\Mail\ContactMessage;
use App\Rules\ReCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;


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
                'g-recaptcha-response' => [new ReCaptcha()],
            ]);
            
            // Üzenet feldolgozása
            $validated['message'] = nl2br(e($validated['message']));

            // Email küldése
            Mail::to('bodge04@gmail.com')->send(new ContactMessage($validated));
            Mail::to($validated['email'])->send(new ContactAutoReply($validated));

            return redirect()->back()->with('success', 'Az üzeneted sikeresen elküldve!');
        } catch (ValidationException $e) {
            // Laravel automatikusan visszairányítja az előző oldalra a hibákkal, ezért itt csak újraküldjük
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Hiba történt a levél küldése közben!');
        }
    }
}
