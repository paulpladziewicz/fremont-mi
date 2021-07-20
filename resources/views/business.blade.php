@extends('layouts.app')

@section('content')
    <section class="mx-4">
        Business
    </section>

    <div class="flex">
        @if ($business->count())
            @foreach ($business as $listing)
                <div class="p-4 border-2 m-4">
                    <h3 class="text-2xl font-bold">{{$listing->name}}</h3>
                    <p class="mt-2">{{$listing->description}}</p>
                </div>
            @endforeach

        @else
            <p>There are no businesses listed.</p>
        @endif
    </div>

@endsection
