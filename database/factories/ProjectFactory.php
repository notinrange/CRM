<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Client;
use App\Constants\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $users = User::pluck('id');
        $clients = Client::pluck('id');
        return [
            //
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'deadline_at' => now()->addDays(rand(1,30))->format('Y-m-d'),
            // 'status' => fake()->randomElement(ProjectStatus::cases())->value,
            'status' =>  $this->faker->randomElement(ProjectStatus::all()),
            'user_id' => $users->random(),
            'client_id' =>$clients->random(),
        ];
    }
}
