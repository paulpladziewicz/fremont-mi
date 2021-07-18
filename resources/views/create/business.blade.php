@extends('layouts.dashboard')

@section('dashboard-display-column')
    <div class="mx-4">
        <h1 class="h1 text-gray-800 mb-12">Create Business Listing</h1>

        <form action="{{route('business')}}" method="post" style="max-width:600px">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Business Name</label>
                <input type="text" name="name" id="name" placeholder="Update Business Name"
                       class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                >
            </div>
            <div class="mb-4">
                <label for="description" class="sr-only">Business Description</label>
                <textarea
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg resize-y"
                    name="description" id="description" rows="5"
                    placeholder="Update Business Description"></textarea>
            </div>
            <div>
                <button type="submit" class="bg-purple-500 text-white px-4 py-3 rounded font-medium w-full">
                    Create Business Listing
                </button>
            </div>
        </form>
    </div>

@endsection
