@extends('layouts.app')

@section('content')
    <div class="w-8/12 mx-auto">
        <h1 class="h1 mt-16">Dashboard</h1>

        {{--   Publish Profile   --}}
        <div class="my-standard">
            <h2 class="h2 text-gray-800">Publish Profile</h2>
            <p class="text-xl font-medium mt-2">Provide the details needed to post a profile on the community people
                page.</p>

            <div>
                <form class="w-8/12 mx-auto" action="{{route('people')}}" method="post">
                    @csrf

                    <div class="mb-4">
                        <label for="title" class="">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter Your Name"
                               class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                               value="{{ old('title') }}">
                        @error('title')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="">Description</label>
                        <textarea
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg resize-y @error('description') border-red-500 @enderror"
                            name="description" id="description" rows="5"
                            placeholder="Enter What You Like To Do">{{old('description')}}</textarea>
                        @error('description')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
                            Register
                        </button>
                    </div>

                </form>
            </div>

        </div>

        {{--   Publish Events   --}}
        <div class="my-standard">
            <h2 class="h2 text-gray-800">Publish Events</h2>
            <p class="text-xl font-medium mt-2">Provide the details needed to post an event on the community event
                page.</p>
            <div>
                <form class="w-8/12 mx-auto" action="{{route('events')}}" method="post">
                    @csrf

                    <div class="mb-4">
                        <label for="title" class="">Title</label>
                        <input type="text" name="title" id="title" placeholder="Enter Event Title"
                               class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('title') border-red-500 @enderror"
                               value="{{ old('title') }}">
                        @error('title')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="">Description</label>
                        <textarea
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg resize-y @error('description') border-red-500 @enderror"
                            name="description" id="description" rows="5"
                            placeholder="Enter Event Description">{{old('description')}}</textarea>
                        @error('description')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
                            Register
                        </button>
                    </div>

                </form>
            </div>
        </div>

        {{--   Publish Businesses   --}}
        <div class="my-standard">
            <h2 class="h2 text-gray-800">Publish Businesses</h2>
            <p class="text-xl font-medium mt-2">Provide the details needed to post a business on the community business
                page.</p>

            <div>
                <form class="w-8/12 mx-auto" action="{{route('business')}}" method="post">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="">Business Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter Business Name"
                               class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('title') border-red-500 @enderror"
                               value="{{ old('title') }}">
                        @error('title')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="">Business Description</label>
                        <textarea
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg resize-y @error('description') border-red-500 @enderror"
                            name="description" id="description" rows="5"
                            placeholder="Enter Event Description">{{old('description')}}</textarea>
                        @error('description')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
                            Register
                        </button>
                    </div>

                </form>
            </div>

        </div>

    </div>

@endsection
