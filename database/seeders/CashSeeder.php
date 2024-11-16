<?php

namespace Database\Seeders;

use App\Models\Cash;
use Illuminate\Database\Seeder;

class CashSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cash::create([
            'name'     => 'cashInHand',
            'amount'    => 0,
        ]);
    }
}
