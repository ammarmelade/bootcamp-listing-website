@props(['transaction'])

<div class="keterangan flex-between">
    
    <div class="tulisan">{{ $transaction->name }}</div>

    <div class="flex-between jumlah">

        <div class="tulisan">Rp</div>

        @if ($transaction->amount >= 0)

            <div class="tulisan green">{{ number_format($transaction->amount, 2, '.', ',') }}</div>
            
        @else

            <div class="tulisan red">{{ number_format($transaction->amount, 2, '.', ',') }}</div>
            
        @endif

    </div>

</div>