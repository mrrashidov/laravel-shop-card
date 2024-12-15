<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Batch, BatchProduct, Provider};

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $provider = Provider::first();
        $batch = Batch::create([
            'provider_id' => $provider->id,        // Bog'liq provider ID
            'purchase_date' => now(),             // Joriy sana
            'total_cost' => 1500.00,              // Umumiy narx
        ]);


        BatchProduct::create([
            'batch_id' => $batch->id,
            'product_id' => 1, // 'Ahmad Tea Earl Grey, 500g' id-si
            'quantity' => 100,
            'cost_per_unit' => 50,
        ]);

        BatchProduct::create([
            'batch_id' => $batch->id,
            'product_id' => 2, // 'Ahmad Tea Mint Green Tea, 250g' id-si
            'quantity' => 200,
            'cost_per_unit' => 30,
        ]);
    }
}
