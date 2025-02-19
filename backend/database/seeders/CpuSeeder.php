<?php

namespace Database\Seeders;
use App\Models\Cpu;

use Illuminate\Database\Seeder;

class CpuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cpu::factory(10)->create();
    }
}
