@props(['date', 'transactions'])

<div class="satu-hari">

    <h4 class="judul-tanggal">{{ $date }}</h4>

    @foreach ($transactions as $transaction)

        <x-e-wallet-history-transaction :transaction="$transaction"/>
        
    @endforeach

</div>