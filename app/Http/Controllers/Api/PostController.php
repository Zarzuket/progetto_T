<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    // restituisce tutti i post
    public function index()
    {
        $posts = Post::with('category','user')->get();
        return response()->json([
            'success' => true,
            'data' => $posts,
        ]);
    }
    // restituisce singolo post tramite slug
    public function show($slug)
    {
        $post = Post::where('slug',$slug)->with('user','category')->first();
        return response()->json([
            'success' => true,
            'data' => $post,
        ]);
    }
}
