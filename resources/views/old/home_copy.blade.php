@extends('layout')

@section('title')
    Discover and Advertise Bootcamps | O-Camp
@endsection

@section('content')
    
    <h1>Discover Bootcamps</h1>

    <div>
        <form action="#" method="get">
            <input 
                type="text" 
                name="search" 
                placeholder= "search.." 
                id="" 
                value="{{ request('search') }}">
        </form>
    </div>

    @foreach ($bootcamps as $bootcamp)

        <article>

            <h1>
                <a href="bootcamps/{{ $bootcamp->slug }}">
                    {{ $bootcamp->name }}
                </a>    
            </h1>

            <p>category: <a href="/categories/{{ $bootcamp->category->slug }}">{{ $bootcamp->category->name }}</a></p>

            <p>Course Organizer: <a href="/organizers/{{ $bootcamp->organizer->username }}">{{ $bootcamp->organizer->firstname }} {{ $bootcamp->organizer->lastname }}</a></p>

            <p>{{ $bootcamp->overview }}</p>

            <p>{{ $bootcamp->total_joined }} Joined</p>

            <p>Course fee: Rp. {{ $bootcamp->fee }}</p>

            <p>Rating: {{ $bootcamp->rating }} Stars</p>

        </article>

    @endforeach

@endsection
