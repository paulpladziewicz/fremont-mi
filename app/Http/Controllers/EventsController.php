<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }

    public function index()
    {
        return view('events');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $event = new Event();

        $event->title = $request->title;

        return back();
    }

    public function destroy(Request $request)
    {
//        $this->authorize('delete', $event);
        return back();
    }
}
