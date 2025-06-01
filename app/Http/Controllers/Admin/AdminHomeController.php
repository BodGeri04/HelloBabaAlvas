<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
    public function showMaintenance()
    {
        return view('admin.maintenance.maintenance');
    }
    public function maintenance(Request $request, $action)
    {

        // Egyedi secret kód (pl. .env-ből)
        $secret = env('MAINTENANCE_SECRET', 'titkos-kod');

        if ($action === 'on' && Auth::check() && Auth::user()->is_admin) {
            // Karbantartás bekapcsolása secret kód engedélyezése
            Artisan::call('down', [
                '--secret' => $secret,
            ]);
            return back()->with('success', 'Az oldal a titkos linkkel továbbra is elérhető.');
        } elseif ($action === 'off') {
            Artisan::call('up');
            return back()->with('success', 'Karbantartási mód kikapcsolva!');
        }
        abort(404);
    }
}
