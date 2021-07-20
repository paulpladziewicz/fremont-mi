@extends('layouts.dashboard')

@section('dashboard-display-column')
    <div class="mx-4">
        <h1 class="h1 text-gray-800 mb-8">Create Event</h1>

        <form action="{{route('events')}}" method="post" style="max-width:600px">
            @csrf
            <div class="mb-4">
                <label for="title" class="sr-only">Title</label>
                <input type="text" name="title" id="title" placeholder="Enter Title"
                       class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                >
            </div>
            <div class="mb-4">
                <label for="description" class="sr-only">Description</label>
                <textarea
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg resize-y"
                    name="description" id="description" rows="5"
                    placeholder="Enter Description"></textarea>
            </div>
            <div>
                <button type="submit" class="bg-purple-500 text-white px-4 py-3 rounded font-medium w-full">
                    Create Event
                </button>
            </div>
        </form>

    </div>

@endsection
