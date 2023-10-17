<x-layout>

    <x-slot name='title'>Discover and Advertise Bootcamps | O-Camp</x-slot>

    <x-slot name='content'>
        
        <x-home-searchbar/>

        <div class="homepage-cards-space">

            @foreach ($bootcamps as $bootcamp)

                <x-bootcamp-card-home :bootcamp="$bootcamp"/>
        
            @endforeach

        </div>

    </x-slot>

</x-layout>