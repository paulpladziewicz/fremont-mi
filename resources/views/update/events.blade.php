@extends('layouts.dashboard')

@section('dashboard-display-column')
    <section class="mx-4">
        <h1 class="h1 text-gray-800 mb-12">Update Event</h1>
    </section>

    <div class="w-8/12 mx-auto">
        <form action="{{route('event.update', $event->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="sr-only">Title</label>
                <input type="text" name="title" id="title" placeholder="Update Title"
                       class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                       value="{{ $event->title }}">
            </div>
            <div class="mb-4">
                <label for="description" class="sr-only">Description</label>
                <textarea
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg resize-y"
                    name="description" id="description" rows="5"
                    placeholder="Update Description">{{ $event->description }}</textarea>
            </div>
            <div>
                <button type="submit" class="bg-purple-500 text-white px-4 py-3 rounded font-medium w-full">
                    Update Event
                </button>
            </div>
        </form>
    </div>

@endsection
