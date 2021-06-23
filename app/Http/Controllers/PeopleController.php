<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function create()
    {
        return view('create.people');
    }

    public function updateListing() {
        $id = Auth::id();
        $people = DB::table('people')
            ->where('user_id', '=', $id)
            ->get();
        return view('update.people', [
            'people' => $people[0]
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
