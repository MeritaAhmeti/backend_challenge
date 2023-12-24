<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgressController extends Controller
{
    public function getProgressHistory()
    {
        // Retrieve the latest 12 sessions with their associated scores, ordered by timestamp
        $sessionsHistory = DB::select('
            SELECT s.*, SUM(sc.score) AS total_score
            FROM Sessions s
            LEFT JOIN Scores sc ON s.session_id = sc.sid
            GROUP BY s.session_id, s.course_id, s.timestamp, s.user_id
            ORDER BY s.timestamp DESC
            LIMIT 12
        ');

        // Map the session data to a formatted array containing total scores and dates
        $formattedHistory = array_map(function ($session) {
            return [
                "score" => $session->total_score, // Total score for the session
                "date" => strtotime($session->timestamp),
            ];
        }, $sessionsHistory);

        // Return the formatted history as a JSON response
        return response()->json(["history" => $formattedHistory]);
    }
}

?>