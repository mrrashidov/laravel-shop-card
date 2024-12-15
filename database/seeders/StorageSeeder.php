<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Storage;

class StorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::create([
            'name' => 'Warehouse 1',
            'location' => 'Tashkent',
        ]);

        Storage::create([
            'name' => 'Warehouse 2',
            'location' => 'Samarkand',
        ]);
    }
}
