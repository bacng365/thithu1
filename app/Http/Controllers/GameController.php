<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    public function index() {
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    public function create() {
        return view('games.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'cover_art' => 'required',
            'developer' => 'required',
            'release_year' => 'required',
            'genre' => 'required',
        ]);

        if ($request->hasFile('cover_art')) {
            $coverArtPath = $request->file('cover_art')->store('games', 'public');
        }

        Game::create([
            'title' => $request->title,
            'cover_art' => $coverArtPath,
            'developer' => $request->developer,
            'release_year' => $request->release_year,
            'genre' => $request->genre,
        ]);

        return redirect()->route('games.index');
    }

    public function edit(Game $game) {
        return view('games.edit', compact('game'));
    }

    public function update(Game $game, Request $request) {
        $request->validate([
            'title' => 'required',
            'developer' => 'required',
            'release_year' => 'required',
            'genre' => 'required',
        ]);

        $coverArtPath = $game->cover_art;
        if ($request->hasFile('cover_art')) {
            Storage::disk('public')->delete($game->cover_art);
            $coverArtPath = $request->file('cover_art')->store('games', 'public');
        }

        $game->update([
            'title' => $request->title,
            'cover_art' => $coverArtPath,
            'developer' => $request->developer,
            'release_year' => $request->release_year,
            'genre' => $request->genre,
        ]);

        return redirect()->route('games.index');
    }

    public function destroy(Game $game) {
        $game->delete();
        return redirect()->route('games.index');
    }
}
