<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusinessController extends Controller
{
    public function index()
    {
        $business = DB::table('business')->get();

        return view('business', [
            'business' => $business
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required'
        ]);

        Business::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return back();
    }
}
