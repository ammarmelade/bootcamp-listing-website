@props(['transaction'])

<div>

    <span>{{ $transaction->created_at }}</span>

    <span>{{ $transaction->name }}</span>

    <span>{{ $transaction->amount }}</span>

</div>