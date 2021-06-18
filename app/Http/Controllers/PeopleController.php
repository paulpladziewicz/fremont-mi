<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PeopleController extends Controller
{
    public function index()
    {
        $people = DB::table('people')->get();

        return view('people', [
            'people' => $people
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);

        People::create([
            'user_id' => $request->user()->id,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return back();
    }

    public function s3(){
        Storage::put('/', 'favicon.png');
    }

    public function updateListing(Request $request, $listing) {
        $people = DB::table('people')->find($listing);

        return view('update.people', [
            'people' => $people
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->authorize('edit', $id);
        $people = People::find($id);
        $people->name = $request->name;
        $people->description = $request->description;
        $people->save();

        return redirect('people');
    }

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(People $listing): \Illuminate\Http\RedirectResponse
    {
        $this->authorize('delete', $listing);
        $listing->delete();
        return back();
    }
}
