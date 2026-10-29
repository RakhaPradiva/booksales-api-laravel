<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        if ($genres->isEmpty()) {
            return response()->json([
                'success' => true,
                'message' => 'Genre data not found!',
                'data' => $genres
            ], 200);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get All Genre Data',
            'data' => $genres,
        ], 200);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 422);
        }

        $genre = Genre::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return response()->json([
            'success' => true,
            'message' => 'New genre added successfully!',
            'data' => $genre
        ], 201);
    }

    public function show(string $id)
    {
        $genre = genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Genre not found!'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get detail genre',
            'data' => $genre
        ], 200);
    }

    public function update(string $id, Request $request)
    {

        $genre = genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Genre not found!'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 422);
        }

        $data = [
            'name' => $request->name,
            'description' => $request->description
        ];

        $genre->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Genre updated successfully!',
            'data' => $genre
        ], 200);
    }

    public function destroy(string $id)
    {
        $genre = genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Genre not found!'
            ], 404);
        }


        $genre->delete();

        return response()->json([
            'success' => true,
            'message' => 'Genre deleted successfully!'
        ], 200);
    }
}
