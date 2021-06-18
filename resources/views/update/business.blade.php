@extends('layouts.app')

@section('content')
    <section class="mx-4">
        Events
    </section>

    <div class="flex">
        @if ($events->count())
            @foreach ($events as $listing)
                <div class="p-4 border-2 m-4">
                    <h3 class="text-2xl font-bold">{{$listing->title}}</h3>
                    <p class="mt-2">{{$listing->description}}</p>

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

@endsection
