<?php

namespace Database\Factories;

use App\Models\Shipment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipment>
 */
class ShipmentFactory extends Factory
{
    protected $model = Shipment::class;

    public function definition()
    {
        return [
            'tracking_no' => $this->faker->unique()->numerify('########'),
            'reference' => $this->faker->word,
            'status' => $this->faker->randomElement(['Pending', 'In Transit', 'Delivered']),
            'tracking_info' => $this->faker->sentence,
        ];
    }
}
