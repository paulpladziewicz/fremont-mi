@extends('layouts.dashboard')

@section('dashboard-display-column')
    <section class="mx-4">
        <h1 class="h1 text-gray-800 mb-12">Update Self</h1>
    </section>

    <div class="w-8/12 mx-auto">
        <form action="{{route('people')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="">Profile Name</label>
                <input type="text" name="name" id="name" placeholder="Enter Profile Name"
                       class="bg-gray-100 border-2 w-full p-4 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="description" class="">Update Description</label>
                <textarea
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg resize-y"
                    name="description" id="description" rows="5"
                    placeholder="Enter a little about yourself..."></textarea>
            </div>
            <div>
                <button type="submit" class="bg-purple-500 text-white px-4 py-3 rounded font-medium w-full">
                    Create Profile
                </button>
            </div>
        </form>
    </div>

@endsection
