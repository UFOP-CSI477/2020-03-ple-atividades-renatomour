<?php

namespace Database\Factories;

use App\Models\Registro;
use App\Models\Equipamento;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RegistroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'equipamento_id' => Equipamento::factory(),
            'user_id' => User::factory(),
            'descricao' => Str::random(10),
            'datalimite' =>$this->faker->date('Y-m-d', 'now'),
            'tipo' => $this->faker->numberBetween(1, 3),

        ];
    }
}
