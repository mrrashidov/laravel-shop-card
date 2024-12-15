<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'name' => 'John Doe',
            'contact_info' => 'johndoe@example.com',
        ]);

        Client::create([
            'name' => 'Jane Smith',
            'contact_info' => 'janesmith@example.com',
        ]);
    }
}
