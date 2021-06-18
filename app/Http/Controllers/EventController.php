<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'updateListing', 'update', 'destroy']);
    }

    public function index()
    {
        $events = DB::table('events')->get();

        return view('events', [
            'events' => $events
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        Event::create([
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return back();
    }

    public function updateListing(Request $request, $listing) {
        $event = DB::table('events')->find($listing);

        return view('update.events', [
            'event' => $event
        ]);
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->title = $request->title;
        $event->description = $request->description;
        $event->save();

        return redirect('events');
    }

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Event $listing): \Illuminate\Http\RedirectResponse
    {
        $listing->delete();

        return back();
    }
}
