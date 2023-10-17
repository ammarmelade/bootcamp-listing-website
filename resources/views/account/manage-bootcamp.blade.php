<x-layout>

    <x-slot name='title'>Manage bootcamps | O-Camp</x-slot>

    <x-slot name='content'>

        <x-dashboard-nav/>

        <br><br><br>

        <div><a href="/create-bootcamp">Create a bootcamp</a></div>

        <div class="homepage-cards-space">

            @foreach ($bootcamps as $bootcamp)

                <x-bootcamp-card-user :bootcamp="$bootcamp"/>
        
            @endforeach

        </div>
        
    </x-slot>

</x-layout>