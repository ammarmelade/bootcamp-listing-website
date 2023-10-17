<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class TransactionController extends Controller
{
    public function view()
    {
        $userId = auth()->id();
        $user = User::findOrFail($userId);

        return view('account.e-wallet-history', [
            'transactions' => $user->transactions->load('user')->sortByDesc('created_at')
        ]);
    }


    public function bill(Bootcamp $bootcamp)
    {
        $ownerId = $bootcamp->user_id;
        $user = User::findOrFail($ownerId);

        $user->e_wallet_balance -= 10;

        if ($user->e_wallet_balance < 10) {

            foreach ($user->bootcamps as $owned_bootcamp) {

                if ($owned_bootcamp->status == 1) {

                    $owned_bootcamp->status = 4;
        
                    $owned_bootcamp->save();
                }
            }
        }

        $user->save();

        $billing_name = "Billing bootcamp: " . $bootcamp->name;

        Transaction::create([

            'user_id' => $user->id,

            'name' => $billing_name,
            'amount' => -10

        ]);

        return redirect($bootcamp->link);
    }    


    public function topup(int $type)
    {
        $userId = auth()->id();
        $user = User::findOrFail($userId);

        $user->e_wallet_balance += 100000;

        if ($user->e_wallet_balance > 10) {

            foreach ($user->bootcamps as $owned_bootcamp) {

                if ($owned_bootcamp->status == 4) {

                    $owned_bootcamp->status = 1;
        
                    $owned_bootcamp->save();
                }
            }
        }

        $user->save();

        $payment_type = 'gopay';

        switch ($type) {

            case "1":
                $payment_type = 'gopay';
                break;

            case "2":
                $payment_type = 'DANA';
                break;

            case "3":
                $payment_type = 'OVO';
                break;

            case "4":
                $payment_type = 'GPN';
                break;

            case "5":
                $payment_type = 'ONE FOR ALL';
                break;
        }

        $payment_type = "Top-Up via " . $payment_type;

        Transaction::create([

            'user_id' => $user->id,

            'name' => $payment_type,
            'amount' => 100000

        ]);

        return redirect('/dashboard');
    }
}