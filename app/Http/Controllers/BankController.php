<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index(){

        return view('Bank');
    }

    public function store(Request $request){
       // dd($request);
       $validate = $request->validate([
        'bankname' => 'required|unique:,column,except,id',
       ]);
    }
}
