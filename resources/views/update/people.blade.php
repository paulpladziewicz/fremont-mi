@extends('layouts.dashboard')

@section('dashboard-display-column')
    <div class="mx-4">
        <h1 class="h1 text-gray-800 mb-8">Update Profile</h1>

        <form action="{{route('people.update', $people->id)}}" method="post" style="max-width:600px">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="sr-only">Update Name</label>
                <input type="text" name="name" id="name" placeholder="Update Name"
                       class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                       value="{{ $people->name }}">
            </div>
            <div class="mb-4">
                <label for="description" class="sr-only">Update Description</label>
                <textarea
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg resize-y"
                    name="description" id="description" rows="5"
                    placeholder="Update Description">{{ $people->description }}</textarea>
            </div>
            <div>
                <button type="submit" class="bg-purple-500 text-white px-4 py-3 rounded font-medium w-full">
                    Update Profile
                </button>
            </div>
        </form>
    </div>

@endsection
