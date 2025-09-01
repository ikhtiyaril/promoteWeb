<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             
            'name' => 'Promo Merdeka',
            'description' => 'Diskon spesial untuk semua layanan di bulan Agustus.',
            'expired' => '2025-08-31',
            'precentage' => 30,
        
        ];
    }
}
