<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        ];
    }


    private function baseState(): array
    {
        $city = $zip = random_int(1, 900);

        return [
            'name' => $this->faker->unique()->company(),
            'address' => $this->faker->address(),
            'city' => $city,
            'zip' =>  $zip,
            'state' => $this->faker->countryCode(),
            'country' => $this->faker->country()

        ];
    }

    /**
     * Indicate that the model's type is invoice.
     */
    public function company(): self
    {
        return $this->state($this->baseState());
    }

}
