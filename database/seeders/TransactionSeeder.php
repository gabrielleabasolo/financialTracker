<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::create([
            'transaction_type' => 'Income',
        ]);

        Transaction::create([
            'transaction_type' => 'Expense',
        ]);

        Transaction::create([
            'transaction_type' => 'Transfer',
        ]);

        Transaction::create([
            'transaction_type' => 'Savings',
        ]);
        Transaction::create([
            'transaction_type' => 'Investments',
        ]);
    }
}
