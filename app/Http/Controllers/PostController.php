<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Store a newly created post in storage.
     */
        public function store(Request $request)
        {
            // Validate the request
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'nullable|string',
            ]);

            // Cria o registro usando os dados validados
            Post::create($validated);

            // Return json success
            return response()->json(['message' => 'Post created successfully.'], 201);
    }
}
