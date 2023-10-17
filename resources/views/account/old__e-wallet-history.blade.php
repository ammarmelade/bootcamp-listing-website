<x-layout>

    <x-slot name='title'>Transaction History | O-Camp</x-slot>

    <x-slot name='content'>
    
        <x-dashboard-nav/>

        <h1>Transaction History</h1>

        @foreach ($transactions as $transaction)

            <x-e-wallet-transaction :transaction="$transaction"/>
    
        @endforeach
    
    </x-slot>

</x-layout>