<?php

namespace Database\Factories;

use App\Models\Score;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScoreFactory extends Factory
{
    protected $model = Score::class;

    public function definition()
    {
        return [
            // Define your score model attributes here
            'sid' => function () {
                return factory(\App\Models\Session::class)->create()->session_id;
            },
            'score' => $this->faker->randomNumber(),
        ];
    }
}
