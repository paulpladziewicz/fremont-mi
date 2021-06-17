@extends('layouts.app')

@section('content')
    <section class="mx-4">
        People
    </section>

    <div class="flex">
        @if ($people->count())
            @foreach ($people as $listing)
                <div class="p-4 border-2 m-4">
                    <h3 class="text-2xl font-bold">{{$listing->name}}</h3>
                    <p class="mt-2">{{$listing->description}}</p>

                    <form action="{{ route('people.destroy', $listing->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-blue-500">Delete</button>
                    </form>

                </div>

            @endforeach

        @else
            <p>There are no people listed.</p>
        @endif
    </div>

@endsection
