<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'name'=>$this->faker->name(),
        'description'=>$this->faker->paragraph,
        'quantity'=>$this->faker->randomNumber(9),
        'purchase_price'=>$this->faker->randomNumber(9),
        'sales_price'=>$this->faker->randomNumber(9),
        'image'=>$this->faker->name(),
        'status'=>$this->faker->boolean(),
        'quantity_sold'=>$this->faker->randomNumber(9)
        ];
    }
}