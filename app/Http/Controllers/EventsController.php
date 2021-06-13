<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
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
            'time' => 0,
            'link' => 0
        ]);

        return back();
    }

    public function destroy(Request $request)
    {
//        $this->authorize('delete', $event);
        return back();
    }
}
