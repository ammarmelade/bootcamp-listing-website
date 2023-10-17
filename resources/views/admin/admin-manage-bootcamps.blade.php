<x-layout>

    <x-slot name='title'>Administration - Manage bootcamps | O-Camp</x-slot>

    <x-slot name='content'>

        <x-admin-dashboard-nav/>
       
        <br>

        <form action="" method="get">

            <label for="search">Search bootcamp:</label>

            <input type="text" name="search" id="searchbar-text" placeholder="Search..." style="color:black" value="{{ request('search') }}">
            
        </form>

        <br><hr>        

        <div class="homepage-cards-space">

            @foreach ($bootcamps as $bootcamp)

                <x-bootcamp-card-admin :bootcamp="$bootcamp"/>

                @if ($bootcamp->status == 0)

                    <p>Status: Under review</p>

                    <form action="/admin/approve-bootcamp/{{ $bootcamp->slug }}" method="post">
                        @csrf
                        <button style="color:black; padding: 3px" type="submit">Approve</button>
                    </form>

                    <form action="/admin/reject-bootcamp/{{ $bootcamp->slug }}" method="post">
                        @csrf
                        <button style="color:black; padding: 3px" type="submit">Reject</button>
                    </form>

                @elseif ($bootcamp->status == 1)

                    <p>Status: Approved</p>

                    <form action="/admin/suspend-bootcamp/{{ $bootcamp->slug }}" method="post">
                        @csrf
                        <button style="color:black; padding: 3px" type="submit">Suspend</button>
                    </form>

                @elseif ($bootcamp->status == 2)

                    <p>Status: Rejected</p>

                    <form action="/admin/approve-bootcamp/{{ $bootcamp->slug }}" method="post">
                        @csrf
                        <button style="color:black; padding: 3px" type="submit">Approve</button>
                    </form>

                @elseif ($bootcamp->status == 3)

                    <p>Status: Suspended</p>

                    <form action="/admin/unsuspend-bootcamp/{{ $bootcamp->slug }}" method="post">
                        @csrf
                        <button style="color:black; padding: 3px" type="submit">Unsuspend</button>
                    </form>

                @elseif ($bootcamp->status == 4)

                    <p>Status: Not enough funds</p>

                    <form action="/admin/suspend-bootcamp/{{ $bootcamp->slug }}" method="post">
                        @csrf
                        <button style="color:black; padding: 3px" type="submit">Suspend</button>
                    </form>
                    
                @endif

                <br>
        
            @endforeach

        </div>
        
    </x-slot>

</x-layout>