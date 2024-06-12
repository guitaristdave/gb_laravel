<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use \Illuminate\Http\JsonResponse;
use \Symfony\Component\HttpFoundation\BinaryFileResponse;

class GameController extends Controller
{
    public function index(): JsonResponse
    {
        $games = Game::all();
        return response()->json($games);
    }

    public function show(int $id): JsonResponse
    {
        $game = Game::query()->find($id);
        return response()->json($game);
    }

    public function store(Request $request): JsonResponse
    {
        $year = date('Y');
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'studio' => 'required|string|max:255',
            'genre' => 'required|string|max:50',
            'year' => "required|integer|max:${year}",
        ]);
        $game = Game::query()->create([
           'title' => $validateData['title'],
           'studio' => $validateData['studio'],
           'genre' => $validateData['genre'],
           'year' => $validateData['year']
        ]);
        return response()->json($game, 201);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $year = date('Y');
        $game = Game::query()->find($id);
        $validateData = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'studio' => 'sometimes|required|string|max:255',
            'genre' => 'sometimes|required|string|max:50',
            'year' => "sometimes|required|integer|max:${year}",
        ]);
        $game?->update($validateData);
        return response()->json($game, 200);
    }

    public function destroy(int $id): JsonResponse
    {
        $game = Game::query()->find($id);
        $game?->delete();
        return response()->json(null, 204);
    }


}
