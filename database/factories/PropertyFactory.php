<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'               => $this->faker->sentence,
            'name_tr'            => $this->faker->sentence,
            'freatured_image'    => 'https://picsum.photos/1200/800?random=' . rand(10, 1000),
            'location_id'        => Location::all()->random()->id,
            'price'              => rand(1000,800000),
            'sale'               => rand(1,2),
            'type'               => $this->faker->randomElement($array = array ('land','apartment','villa')),
            'bedrooms'           => rand(1,6),
            'drawing_rooms'      => rand(1,3),
            'bathrooms'          => rand(1,5),
            'net_sqm'            => rand(55,300),
            'gross_sqm'          => rand(65,450),
            'pool'               => rand(1,4),
            'overview'           => $this->faker->text(250),
            'overview_tr'        => $this->faker->text(250),
            'why_buy'            => $this->faker->text(1000),
            'description'        => $this->faker->text(1500),
            'description_tr'     => $this->faker->text(1500),
        ];
    }
}
