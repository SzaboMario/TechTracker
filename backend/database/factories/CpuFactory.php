<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cpu>
 */
class CpuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $brands = ['Intel', 'AMD', 'ARM', 'Qualcomm'];
        $sockets = ['LGA 1200', 'LGA 1700', 'AM4', 'AM5', 'TR4', 'sTRX4', 'sWRX8', 'FCLGA 3647', 'Socket 2066', 'Socket 478'];
        $clocks = [3.6, 3.9, 4.0, 3.8]; // GHz
        $watts = [65, 95, 125, 180]; // W
        return [
            'brand'=>fake()->randomElement($brands),
            'socket'=>fake()->randomElement($sockets),
            'clock'=>fake()->randomElement($clocks),
            'watt'=>fake()->randomElement($watts),
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
    }
}
