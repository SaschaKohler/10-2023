<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $start = now()->subHours(rand(1, 20))->subDays(rand(1, 200));
        return [
            //
            'url' => '',
            'title' => $this->faker->text(20),
            'start' => $start->format('Y-m-d H:i:s'),
            'end' => $start->addHours(rand(5, 48))->format('Y-m-d H:i:s'),
            'allDay' => random_int(0, 1),
        //    'calendar' => $this->faker->randomElement(['Baumpflege', 'Böschungsmähen', 'Zaunbau', 'persönlich', 'Gartenpflege', 'Stockfräsen', 'Winterdienst', 'Sonstiges']),
            // 'extendedProps' =>
                // [
//                    'calendar' => $this->faker->randomElement(['Baumpflege', 'Böschungsmähen', 'Zaunbau', 'persönlich', 'Gartenpflege', 'Stockfräsen', 'Winterdienst', 'Sonstiges']),
//                    'allDay' => random_int(0, 1),
//                    'backgroundColor' => $this->faker->randomElement(['green', 'purple', 'blue', 'red'])
                // ],
            'backgroundColor' => $this->faker->randomElement(['green', 'purple-100', 'blue', 'red']),
            'borderColor' => $this->faker->randomElement(['green-100', 'purple', 'blue', 'red']),
            // 'recurrence' => 10
            //
        ];
    }
}
