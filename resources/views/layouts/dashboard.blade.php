@extends('layouts.app')

@section('content')
    <div class="md:flex mt-16">
        <div class="w-3/12 md:border-r-2">
            <h2 class="text-4xl text-gray-600 font-bold">Menu</h2>
            <ul>
                <li class="text-3xl text-gray-800 font-semibold ml-4 mt-6"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="text-3xl text-gray-800 font-semibold ml-4 mt-4">Profile</li>
                <ul class="ml-8 mt-4">
                    <li class="text-xl font-light"><a href="{{route('update.profile')}}">Create Profile</a></li>
                    <li class="mt-3 text-xl font-light"><a href="{{route('update.profile')}}">Update Profile</a></li>
                </ul>
                <li class="text-3xl text-gray-800 font-semibold ml-4 mt-4">Events</li>
                <ul class="ml-8 mt-4">
                    <li class="text-xl font-light">Create Event</li>
                </ul>
                <li class="text-3xl text-gray-800 font-semibold ml-4 mt-4">Business</li>
                <ul class="ml-8 mt-4">
                    <li class="text-xl font-light">Create Business Listing</li>
                </ul>
            </ul>
        </div>
        <div class="w-9/12 px-4">
            @yield('dashboard-display-column')
        </div>
    </div>
@endsection
