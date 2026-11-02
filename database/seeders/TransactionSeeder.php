<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Transaction::create([
            'order_number' => 'ORD-001',
            'customer_id' => 2,
            'book_id' => 3,
            'total_amount' => 200000.00,
        ]);
        Transaction::create([
            'order_number' => 'ORD-002',
            'customer_id' => 3,
            'book_id' => 3,
            'total_amount' => 300000.00,
        ]);
        Transaction::create([
            'order_number' => 'ORD-003',
            'customer_id' => 3,
            'book_id' => 3,
            'total_amount' => 60000.00,
        ]);
        Transaction::create([
            'order_number' => 'ORD-004',
            'customer_id' => 3,
            'book_id' => 3,
            'total_amount' => 60000.00,
        ]);
    }
}
