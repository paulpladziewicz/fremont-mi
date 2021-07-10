<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $events = DB::table('events')->where('user_id', auth()->id())->get();
        $business = DB::table('business')->where('user_id', auth()->id())->get();
        return view('dashboard', [
            'events' => $events,
            'business' => $business
        ]);
    }
}
