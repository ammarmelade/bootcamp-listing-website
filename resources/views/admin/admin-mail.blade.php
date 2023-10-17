<x-layout>

    <x-slot name='title'>Administration - Mails | O-Camp</x-slot>

    <x-slot name='content'>

        <x-admin-dashboard-nav/>
       
        <br><br><br>

        <form action="" method="get">

            <input type="text" name="search" id="searchbar-text" placeholder="Search..." value="{{ request('search') }}">
            
        </form>

        <div class="homepage-cards-space">

            @foreach ($bootcamps as $bootcamp)

                <x-bootcamp-card-user :bootcamp="$bootcamp"/>
        
            @endforeach

        </div>
        
    </x-slot>

</x-layout>