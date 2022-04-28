<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use App\Services\GamesGenerator;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::with('team1', 'team2')->orderBy('week')->get();

        return view('Pages/games', compact('games'));
    }

    public function generate(GamesGenerator $gamesGenerator)
    {
        Game::query()->delete();
        $teams = Team::get();
        $gamesGenerator->generateGames(teams: $teams);

        return redirect('games');
    }


    public function generateResults(GamesGenerator $gamesGenerator)
    {
        $game = Game::first();


        $gamesGenerator->generateGameResults($game);
    }
}
