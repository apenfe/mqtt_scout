<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run(): void
    {

        User::factory()->create([
            'name' => 'user',
            'email' => 'user@user.es',
        ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.es',
        ]);
    }
}
