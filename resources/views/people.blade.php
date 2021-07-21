@extends('layouts.app')

@section('content')
    <section class="my-8 mx-4">
        <h1 class="h1">People</h1>
    </section>

    <div class="mx-4 grid grid-cols-3 gap-4">
        @if ($people->count())
            @foreach ($people as $listing)
                <div class="col-span-1 p-4 border-2">
                    <img class="w-40 rounded-full mx-auto" src="/images/3" alt="">
                    <h3 class="text-2xl font-bold">{{$listing->name}}</h3>
                    <p class="mt-2">{{substr($listing->description, 0, 200,) . "..."}}</p>
                </div>
            @endforeach

        @else
            <p>There are no people listed.</p>
        @endif
    </div>

@endsection
