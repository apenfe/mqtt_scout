<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('families')->insert([
            [
                'name' => 'Ipex-16',
                'image' => 'familia1.jpg',
                'description' => 'Descripción de la Familia 1',
            ],
            [
                'name' => 'Familia 2',
                'image' => 'familia2.jpg',
                'description' => 'Descripción de la Familia 2',
            ],
            [
                'name' => 'Familia 3',
                'image' => 'familia3.jpg',
                'description' => 'Descripción de la Familia 3',
            ],
        ]);
    }
}
