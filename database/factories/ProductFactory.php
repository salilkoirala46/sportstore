<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->name,
            'product_price' => $this->faker->randomNumber(2),
            'product_rating' =>$this->faker->randomNumber(1),
            'product_image' =>'images/product-1.jpg',
            'short_description' =>$this->faker->text(10),
            'long_description' =>$this->faker->sentence(),
        ];
    }
}
