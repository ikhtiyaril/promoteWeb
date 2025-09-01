<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pricing;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pricing>
 */
class PricingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         $pricings = [
            [
                'name' => 'Basic Plan',
                'price' => 50000,
                'feature' => ['1 Website', 'Basic Support', '1GB Storage'],
                'information' => 'Paket murah untuk personal project.',
                'image' => 'pricing/basic.png',
            ],
            [
                'name' => 'Pro Plan',
                'price' => 150000,
                'feature' => ['5 Websites', 'Priority Support', '10GB Storage', 'Custom Domain'],
                'information' => 'Cocok untuk freelancer & UMKM.',
                'image' => 'pricing/pro.png',
            ],
            [
                'name' => 'Enterprise Plan',
                'price' => 500000,
                'feature' => ['Unlimited Websites', '24/7 Support', '100GB Storage', 'Advanced Security'],
                'information' => 'Paket lengkap untuk perusahaan besar.',
                'image' => 'pricing/enterprise.png',
            ],
        ];

        return $pricings[array_rand($pricings)];
    }
}
