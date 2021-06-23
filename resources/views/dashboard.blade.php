@extends('layouts.dashboard')

@section('dashboard-display-column')
    <h1 class="h1">Welcome <span class="text-purple-700">{{auth()->user()->name}}</span></h1>
    <p class="mt-2 text-xl">Our goal was to make an easy-to-use local directory just for Fremont, MI. Let us know if you have any suggestions.</p>
    <p class="mt-4 text-xl">In order to be found with the people page, please <a class="text-purple-700" href="">create a profile</a>.</p>

    <div class="mt-16">
        <h2 class="text-4xl font-bold">Event Listings</h2>
        <p class="mt-2 text-xl"> All of your current event listings will be displayed here. Feel free to edit or delete them at any time.</p>
    </div>

    <div class="mt-16">
        <h2 class="text-4xl font-bold">Business Listings</h2>
        <p class="mt-2 text-xl"> All of your current business listings will be displayed here. Feel free to edit or delete them at any time.</p>
    </div>

@endsection
