<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieConsentController extends Controller
{
    public function store(Request $request)
    {
        $value = $request->input('consent') === 'accept' ? 'accepted' : 'rejected';
        return response()->json(['message' => 'Consent saved'])
            ->cookie('cookie_consent', $value, 60 * 24 * 365); // 1 év
    }
}
