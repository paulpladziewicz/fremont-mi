@extends('layouts.app')

@section('content')
    <section class="my-8 mx-4">
        <h1 class="h1">Events</h1>
    </section>

    <div class="mx-4 grid grid-cols-3 gap-4">
        @if ($events->count())
            @foreach ($events as $listing)
                <div class="col-span-1 p-4 border-2">
                    <h3 class="text-2xl font-bold">{{$listing->title}}</h3>
                    <p class="mt-2">{{$listing->description}}</p>
                </div>
            @endforeach

        @else
            <p>There are no events listed.</p>
        @endif
    </div>

@endsection
