<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProviderSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            BatchSeeder::class,
            BatchProductSeeder::class,
            StorageSeeder::class,
            StorageProductSeeder::class,
            ClientSeeder::class,
            OrderSeeder::class,
            OrderProductSeeder::class,
            RefundSeeder::class,
        ]);
    }
}
