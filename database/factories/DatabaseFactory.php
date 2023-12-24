<?php



use App\Models\Session;
use App\Models\Score;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatabaseFactory extends Factory
{
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

