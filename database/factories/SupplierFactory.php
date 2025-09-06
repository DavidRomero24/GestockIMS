<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name,
            'phone_number'=>$this->faker->phoneNumber,
            'email'=>$this->faker->email,
            'company'=>$this->faker->company,
            'department'=>$this->faker->department,
            'city'=>$this->faker->city,
        ];
    }
}
