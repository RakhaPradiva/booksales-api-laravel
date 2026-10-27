<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        return response()->json(
            [
                "sucess" => true,
                "message" => "Get All Genre Data",
                "data" => $genres
            ],
            200
        );
    }
}
