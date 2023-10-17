<x-layout>

    <x-slot name='title'>

        {{ $bootcamp->name }} - {{ $bootcamp->organizer->name }} | O-Camp

    </x-slot>

    <x-slot name='content'>
        
        <article>

            <h1>{{ $bootcamp->name }}</h1>

            <p>Category: <a href="/categories/{{ $bootcamp->category->slug }}">{{ $bootcamp->category->name  }}</a></p>

            <p>Course Organizer: <a href="/organizers/{{ $bootcamp->organizer->username }}">{{ $bootcamp->organizer->firstname }} {{ $bootcamp->organizer->lastname }}</a></p>

            <p>{{ $bootcamp->description }}</p>

        </article>

    </x-slot>

</x-layout>