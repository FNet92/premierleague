<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer id
 * @property integer team_1_id
 * @property integer team_2_id
 * @property integer week
 * @property integer team_1_goals_scored
 * @property integer team_2_goals_scored
 */
class Game extends Model
{
    use HasFactory;

    protected $fillable = ['week'];

    /**
     * @return Team
     */
    public function team1()
    {
        return $this->hasOne(Team::class, 'id', 'team_1_id');
    }

    public function team2()
    {
        return $this->hasOne(Team::class, 'id', 'team_2_id');
    }
}
