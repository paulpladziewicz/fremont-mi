@extends('layouts.app')

@section('content')
    <div class='my-12 mx-4'>
        <div class="w-9/12 mx-auto text-center">
            <h1 class=' text-7xl font-bold mt-20 mb-1 heading-spaced'>Bringing the community together with a local
                directory, <span
                    class='text-purple-700'>just for Fremont.</span></h1>
        </div>
        <img class="w-full" src="{{asset('large-group.jpeg')}}" alt="">
        <div class="w-9/12 mx-auto text-center">
            <p class='text-5xl font-semibold text-gray-800 heading-spaced'>Meet others, promote events, and support
                local
                business.</p>
            <p class='mt-6 text-3xl font-light'>Fremont is lost in the shadows of big tech. The purpose of this website
                is to strengthen our local
                community by focusing 100% on Fremont.</p>
        </div>
    </div>

    <div class="w-9/12 mx-auto">
        <img src="{{asset('profile-pictures.jpeg')}}" alt="">
    </div>

    <div class='my-8 px-2'>
        <h2 class='text-5xl font-bold'>Meet People Who Like To Do The Same Things</h2>
        <p class='text-4xl font-medium text-gray-500'>Enter your info and reach out to others to find people
            to do things you enjoy.</p>
    </div>

    <div class='my-8 px-2'>
        <h2 class='text-5xl font-bold'>Get The Word Out For Events</h2>
        <p class='text-4xl font-medium text-gray-500'>Whether virtual or in person, the more the
            merrier.</p>
    </div>

    <div class='my-8 px-2'>
        <h2 class='text-5xl font-bold'>Find and Utilize Local Business</h2>
        <p class='text-4xl font-medium text-gray-500'>Become aware of what local businesses have to
            offer.</p>
    </div>

    <div class='my-8 px-2 flex items-center'>
        <div class="w-6/12">
            <h2 class='text-5xl font-bold'>We value your opinion.</h2>
            <p class='text-4xl font-medium text-gray-500'>How can we make the site better for Fremont?</p>
            <img src="{{asset('small-group.jpeg')}}" alt="">
        </div>
        <div class="w-6/12">

            <form class='md:flex md:flex-wrap md:justify-between' action="">
                <div class='md:w-1/2'>
                    <input class='w-full p-4 md:mr-1 rounded-2xl bg-gray-100 text-lg' type="text">
                </div>
                <div class='mt-4 md:w-1/2 md:mt-0'>
                    <input class='w-full p-4 md:ml-1 rounded-2xl bg-gray-100 text-lg' type="text">
                </div>
                <div class='mt-4 md:w-1/2'>
                    <input class='w-full p-4 md:mr-1 rounded-2xl bg-gray-100 text-lg' type="email">
                </div>
                <div class='mt-4 md:w-1/2'>
                    <input class='w-full p-4 md:ml-1 rounded-2xl bg-gray-100 text-lg' type="text" required>
                </div>
                <div class='w-full mt-4'>
                <textarea class='w-full p-4 rounded-2xl bg-gray-100 text-lg' name="message" id="message"
                         rows="5" required></textarea>
                </div>
                <div>
                    <input class='mt-4 btn' type="submit" value="submit">
                </div>
            </form>

        </div>
    </div>

    <p>Built & Managed by Bracket Network, LLC.</p>
    </div>
@endsection
