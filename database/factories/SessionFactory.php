<?php


namespace Database\Factories;

use App\Models\Session;
use Illuminate\Database\Eloquent\Factories\Factory;

class SessionFactory extends Factory
{
    protected $model = Session::class;

    public function definition()
    {
        return [
            'session_id' => $this->faker->unique()->uuid,
            'course_id' => $this->faker->randomNumber(),
            'timestamp' => now(),
            'user_id' => $this->faker->randomNumber(),
        ];
    }
}

?>