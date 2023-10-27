<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;


class TransactionController extends Controller
{
    public function index()
    {
        return view('transaction');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'id' => 'required|autoincrement|string|min:3|max:25',
            'amount' => 'required|numeric|currency_IDR|Rp|notNull|default(0)',
            'type' => 'required|string|notNull|',
            'category' => 'required|string|notNull|uncategorized',
            'notes' => 'requires|string|text',
        ]);
        $transaction = new transaction();
        $transaction->id= $validated['id'];
        $transaction->amount= $validated['amount'];
        $transaction->type= $validated['type'];
        $transaction->category= $validated['category'];
        $transaction->notes= $validated['notes'];
        $transaction->save();

        return redirect()->route('transaction-us.index')->with('Thank you, we will transaction you soon!');
    }
}
