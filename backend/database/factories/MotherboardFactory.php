<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Motherboard>
 */
class MotherboardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $motherboardBrands = ['ASUS', 'MSI', 'Gigabyte', 'ASRock', 'Biostar', 'EVGA', 'Intel', 'Supermicro', 'Zotac', 'Acer'];
        $motherboardModels = ['ROG STRIX B550-F', 'X570 AORUS ELITE', 'B450 TOMAHAWK MAX', 'Z490 AORUS ULTRA', 'H310M PRO-VDH PLUS','Z390 Phantom Gaming 4', 'Z170 Classified K', 'Z590-A PRO', 'Z270 Killer SLI/ac', 'Z170M-ITX/ac'];
        $cpuSockets = ['LGA 1200', 'LGA 1700', 'AM4', 'AM5', 'TR4', 'sTRX4', 'sWRX8', 'FCLGA 3647', 'Socket 2066', 'Socket 478'];        
        $sizes = ['ATX', 'Micro-ATX', 'Mini-ITX', 'E-ATX', 'XL-ATX', 'Nano-ITX', 'Pico-ITX', 'SSI CEB', 'SSI EEB', 'HPTX'];        
        $creators = ['Mike', 'Adam', 'James', 'Lili', 'Gustav'];  
        return [
            'brand' => fake()->randomElement($motherboardBrands),
            'model' => fake()->randomElement($motherboardModels),
            'socket' => fake()->randomElement($cpuSockets),
            'size' => fake()->randomElement($sizes),
            'created_by' => fake()->randomElement($creators),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
