<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\ClubGround;
use App\Models\Competition;
use App\Models\Game;

use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function getCompetitions() {
        return Competition::all();
    }

    public function getClubs() {
        return Club::all();
    }

    public function showGamesFromCompetition($id, Request $request) {
        $FoundCompetition = Competition::findOrFail($id);
        $query = Game::query();
        $selectedCompetition = $FoundCompetition->name;
        $filter = 'all';

        $query->where('competition_id', $FoundCompetition->id);

        if ($request->filled('score')) {
            if($request->score === 'yes') {
                $filter = 'scored';
                $query->where('home_score', '!=',null);
            }
            else if($request->score === 'no') {
                $filter = 'unscored';
                $query->where('home_score',null);
            }
        }

        $games = $query->orderBy('starts_at')->get();

        return view('competition', [
            'competitions' => $this->getCompetitions(),
            'games' => $games,
            'selectedCompetition' => $selectedCompetition,
            'filter' => $filter,
        ]);
    }

    public function showForm() {
        return view('add', [
            'clubs' => $this->getClubs(),
        ]);
    }

    public function storeGame(Request $request) {

        $request->validate([
            'home_club_id' => 'required|exists:clubs,id',
            'away_club_id' => 'required|exists:clubs,id',
            'home_score' => 'min:0',
            'away_score' => 'min:0',
            'starts_at' => 'date',
        ]);
    }
}
