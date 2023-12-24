<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = 'Sessions'; 

    // Define the relationship with the Score model
    public function scores()
    {
        return $this->hasMany(Score::class, 'sid', 'session_id');
    }
}
?>