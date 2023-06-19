<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function index(){
        return view('FinanceTracker');
    }
    
    public function getTransactions(){
        $transactionData = Transaction::all();
        return view('FinanceTracker', compact('transactionData'));
    }
}
