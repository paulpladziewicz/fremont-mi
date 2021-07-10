@extends('layouts.dashboard')

@section('dashboard-display-column')
    <section class="mx-4">
        <h1 class="h1 text-gray-800 mb-12">Update Business</h1>
    </section>

    <div class="w-8/12 mx-auto">
        <form action="{{route('business.update', $business->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="sr-only">Business Name</label>
                <input type="text" name="name" id="name" placeholder="Update Business Name"
                       class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                       value="{{ $business->name }}">
            </div>
            <div class="mb-4">
                <label for="description" class="sr-only">Business Description</label>
                <textarea
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg resize-y"
                    name="description" id="description" rows="5"
                    placeholder="Update Business Description">{{ $business->description }}</textarea>
            </div>
            <div>
                <button type="submit" class="bg-purple-500 text-white px-4 py-3 rounded font-medium w-full">
                    Update Business
                </button>
            </div>
        </form>
    </div>

@endsection
