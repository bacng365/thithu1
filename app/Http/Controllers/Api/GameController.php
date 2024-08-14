<?php

namespace App\Http\Controllers\Api;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GameController extends Controller
{
    public function index() {
        $games = Game::all();
        return response()->json([
            'data' => $games,
            'message' => 'Success'
        ], 200);
    }

    public function store(Request $request) {
        $newGame = Game::create([
            'title' => $request->title,
            'cover_art' => null,
            'developer' => $request->developer,
            'release_year' => $request->release_year,
            'genre' => $request->genre,
        ]);

        return response()->json([
            'data' => $newGame,
            'message' => 'Success'
        ], 200);
    }

    public function update(Game $game, Request $request) {
        $game->update([
            'title' => $request->title,
            'cover_art' => null,
            'developer' => $request->developer,
            'release_year' => $request->release_year,
            'genre' => $request->genre,
        ]);

        return response()->json([
            'data' => $game,
            'message' => 'Success'
        ], 200);
    }

    public function destroy(Game $game) {
        $game->delete();
        return response()->json([
            'message' => 'Success'
        ], 200);
    }
}
