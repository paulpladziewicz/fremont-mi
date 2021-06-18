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

    public function updateListing(Request $request, $listing) {
        $business = DB::table('business')->find($listing);

        return view('update.business', [
            'business' => $business
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->authorize('edit', $id);
        $business = Business::find($id);
        $business->name = $request->name;
        $business->description = $request->description;
        $business->save();

        return redirect('business');
    }

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Business $listing): \Illuminate\Http\RedirectResponse
    {
        $this->authorize('delete', $listing);
        $listing->delete();
        return back();
    }
}
