<x-layout>

    <x-slot name='title'>Administration - Manage users | O-Camp</x-slot>

    <x-slot name='content'>

        <x-admin-dashboard-nav/>
       
        <br>

        <form action="" method="get">

            <label for="search">Search user:</label>

            <input type="text" name="search" id="searchbar-text" placeholder="Search..." style="color:black" value="{{ request('search') }}">
            
        </form>

        <br><hr>        

        <div>

            @foreach ($users as $user)

                <div>{{ $user->username }}</div>
                <div>{{ $user->email }}</div>

                @if ($user->is_suspended)

                    <form action="/admin/unban-user/{{ $user->id }}" method="post">

                        @csrf

                        <button style="color:black; padding: 3px" type="submit">Unban</button>

                    </form>
                    
                @else

                    <form action="/admin/ban-user/{{ $user->id }}" method="post">

                        @csrf

                        <button style="color:black; padding: 3px" type="submit">Ban</button>

                    </form>
                    
                @endif

                <br><br>
        
            @endforeach

        </div>
        
    </x-slot>

</x-layout>