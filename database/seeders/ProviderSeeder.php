<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Provider;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Provider::create([
            'name' => 'Ahmad Tea Supplier',
            'contact_info' => 'ahmadtea@example.com',
        ]);

        Provider::create([
            'name' => 'Provider 2',
            'contact_info' => 'provider2@example.com',
        ]);
    }
}
