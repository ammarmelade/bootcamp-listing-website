<x-layout>

    <x-slot name='title'>Dashboard | O-Camp</x-slot>

    <x-slot name='content'>
    
        <x-dashboard-nav/>

        <h1>My Account</h1>

        <p>{{ $user->firstname }} {{ $user->lastname }}</p>

        <p>{{ $user->email }}</p>

        <p>{{ $user->bio }}</p>

        <div><h1>E-Wallet</h1></div>
        
        <div>Rp. {{ $user->e_wallet_balance }}</div>

        <div><a href="/"><button>Top up</button></a></div>

        <div><a href="/transactions"><button>History</button></a></div>
    
    </x-slot>

</x-layout>