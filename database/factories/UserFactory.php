<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->numberBetween(1, 100),
            'cedula' => $this->faker->unique()->numberBetween(1, 100),
            'name' => $this->faker->name,
            'apellido' => $this->faker->lastName,
            'direccion' => $this->faker->address,
            'telefono' => $this->faker->phoneNumber,
            'fecha_nacimiento' => $this->faker->date,
            'genero' => $this->faker->randomElement(['masculino', 'femenino']),
            'especialidad' => $this->faker->jobTitle,
            'username' => $this->faker->userName,
            'rol' => $this->faker->randomElement(['admin', 'doctor', 'secretaria']),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),

            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
