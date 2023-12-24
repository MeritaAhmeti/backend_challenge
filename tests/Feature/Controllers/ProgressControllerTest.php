<?php

// tests/Feature/Controllers/ProgressControllerTest.php

namespace Tests\Feature\Controllers;

use App\Models\Session;
use App\Models\Score;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProgressControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testGetProgressHistory()
    {
        // Create test data for sessions and scores
        \Database\Factories\SessionFactory::new()->count(12)->create();
        \Database\Factories\ScoreFactory::new()->count(12)->create();

        // Call the endpoint
        $response = $this->get('/api/progress/history');

        // Assert a successful response
        $response->assertStatus(200);

        // Assert the response structure
        $response->assertJsonStructure([
            'history' => [
                '*' => [
                    'score',
                    'date',
                ],
            ],
        ]);

        // Assert the number of returned sessions
        $this->assertCount(12, $response->json('history'));
    }
}
