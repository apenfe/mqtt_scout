<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('devices')->insert([
            [
                'deviceID' => 'Device1',
                'apikey' => 'apikey1',
                'image' => 'device1.jpg',
                'description' => 'Descripción del Device 1',
                'family_id' => 1,
                'attrs' => true,
                'cmd' => false,
                'cmdexe' => false,
            ],
            [
                'deviceID' => 'Device2',
                'apikey' => 'apikey2',
                'image' => 'device2.jpg',
                'description' => 'Descripción del Device 2',
                'family_id' => 2,
                'attrs' => true,
                'cmd' => false,
                'cmdexe' => false,
            ],
            [
                'deviceID' => 'Device3',
                'apikey' => 'apikey3',
                'image' => 'device3.jpg',
                'description' => 'Descripción del Device 3',
                'family_id' => 3,
                'attrs' => true,
                'cmd' => false,
                'cmdexe' => false,
            ],
        ]);
    }
}
