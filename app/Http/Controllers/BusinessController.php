<?php

namespace App\Http\Controllers;

use App\Models\Business;
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
            'user_id' => $request->user()->id,
            'name' => $request->name,
            'description' => $request->description
        ]);

        return back();
    }

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Business $listing): \Illuminate\Http\RedirectResponse
    {
        $listing->delete();

        return back();
    }
}
