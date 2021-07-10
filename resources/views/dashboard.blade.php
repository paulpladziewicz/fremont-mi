@extends('layouts.dashboard')

@section('dashboard-display-column')
    <h1 class="h1">Welcome <span class="text-purple-700">{{auth()->user()->name}}</span></h1>
    <p class="mt-2 text-xl">Our goal was to make an easy-to-use local directory just for Fremont, MI. Let us know if you have any suggestions.</p>
    <p class="mt-4 text-xl">In order to be found with the people page, please <a class="text-purple-700" href="">create a profile</a>.</p>

    <div class="mt-16">
        <h2 class="text-4xl font-bold">Event Listings</h2>
        <p class="mt-2 text-xl"> All of your current event listings will be displayed here. Feel free to edit or delete them at any time.</p>

        <div class="flex">
            @if ($events->count())
                @foreach ($events as $listing)
                    <div class="p-4 border-2 m-4">
                        <h3 class="text-2xl font-bold">{{$listing->title}}</h3>
                        <p class="mt-2">{{$listing->description}}</p>

                        <form action="{{ route('update.event', $listing->id) }}" method="get">
                            @csrf
                            <button type="submit" class="text-blue-500">Edit</button>
                        </form>

                        <form action="{{ route('events.destroy', $listing->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-blue-500">Delete</button>
                        </form>

                    </div>
                @endforeach

            @else
                <p>There are no events listed.</p>
            @endif
        </div>

    </div>

    <div class="mt-16">
        <h2 class="text-4xl font-bold">Business Listings</h2>
        <p class="mt-2 text-xl"> All of your current business listings will be displayed here. Feel free to edit or delete them at any time.</p>

        <div class="flex">
            @if ($business->count())
                @foreach ($business as $listing)
                    <div class="p-4 border-2 m-4">
                        <h3 class="text-2xl font-bold">{{$listing->name}}</h3>
                        <p class="mt-2">{{$listing->description}}</p>

                        <form action="{{ route('update.business', $listing->id) }}" method="get">
                            @csrf
                            <button type="submit" class="text-blue-500">Edit</button>
                        </form>

                        <form action="{{ route('business.destroy', $listing->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-blue-500">Delete</button>
                        </form>

                    </div>
                @endforeach

            @else
                <p>There are no businesses listed.</p>
            @endif
        </div>
    </div>

@endsection
