<?php

namespace App\Services;

use App\Models\Game;
use Illuminate\Support\Collection;

class GamesGenerator
{

    public function generateGames(Collection $teams): void
    {
        foreach ($teams as $team1) {
            foreach ($teams as $team2) {
                if ($team1->id !== $team2->id) {
                    $game = new Game();
                    $game->team_1_id = $team1->id;
                    $game->team_2_id = $team2->id;
                    $game->save();
                }
            }
        }

        $games = Game::get()->shuffle();
        /* @var Game $game */
        foreach ($games as $i => $game) {
            $game->update(['week' => intdiv($i, 2) + 1]);
        }
    }

    public function generateGameResults(Game $game): Game
    {


        return $game;
    }

}
