<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style__e-wallet-history.css">
    <link href='https://fonts.googleapis.com/css?family=Space Grotesk' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Lexend:wght@300&family=Podkova&family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Lexend:wght@300&family=Podkova&family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <title>Transaction History | O-Camp</title>
</head>
<body>
    <div class="atas">
        <a href="/dashboard" class="tulisan-atas">
            <img class="gambar-1" src="images/back.png" alt="">
            Back
        </a>
    </div>
    <main>
        <div class="pembungkus-main">
            <h1>Top Up History</h1>
            <hr class="hr">

            @foreach($transactions->groupBy(function($transaction) {

                return $transaction->created_at->format('l, d/m/Y');

            }) as $date => $groupedTransactions)

                <x-e-wallet-history-day :date="$date" :transactions="$groupedTransactions"/>

            @endforeach

        </div>
    </main>
</body>
</html>