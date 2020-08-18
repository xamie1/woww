<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
     public function filter(Request $request, Post $post)
    {
        $post = $post->newQuery();

        
        if ($request->has('crime')) {
            $user->where('crime', $request->input('name'));
        }

        
        if ($request->has('description')) {
            $user->where('description', 'like', '%'.$request->input('name'). '%');
        }

        
        if ($request->has('context')) {
             $user->where('context', $request->input('context'));
        }


        return view('posts', compact($user->get()));

 
    }
}
