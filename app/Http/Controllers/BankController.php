<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankController extends Controller
{
    public function createBank(){
        return view('BankSettings');
    }
}
