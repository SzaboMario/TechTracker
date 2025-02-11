<?php

namespace Database\Seeders;

use App\Models\Motherboard;
use Illuminate\Database\Seeder;

class MotherboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Motherboard::factory(10)->create();
    }
}
