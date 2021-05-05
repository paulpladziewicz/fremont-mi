@extends('layouts.app')

@section('content')
    <section class="mx-4">
        Business
    </section>

    <div>
        @if ($business->count())
            @foreach ($business as $listing)
                <h3>{{$listing->name}}</h3>
                <p>{{$listing->description}}</p>
            @endforeach

        @else
            <p>There are no businesses listed.</p>
        @endif
    </div>

@endsection
