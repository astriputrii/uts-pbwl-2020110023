<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        dump($validated);
        return $request->all();
    }
}
