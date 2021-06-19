@extends('layouts.app')

@section('content')
    <section class="mx-4">
        <h1 class="h1 text-gray-800 mb-12">Update Self</h1>
    </section>

    <div class="w-8/12 mx-auto">

        <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" id="image">
            <button type="submit">Upload</button>
        </form>

        <form action="{{route('people.update', $people->id)}}" method="post">
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
                    Update Self
                </button>
            </div>
        </form>
    </div>

@endsection
