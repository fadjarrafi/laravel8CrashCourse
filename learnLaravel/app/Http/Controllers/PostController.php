<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // Non fluent
        //DB::select(['table' => 'post', 'where' => ['id' => 1]])

        //fluent
        //DB:table('posts')->where('id', 1)->get()
        $id = 3;
        $posts = DB::table('posts')
            // ->whereBetween('id', [1, 2])
            // ->orWhere('title', 'Mrs.')
            // ->get()
            
            // -> select('title')
            // ->distinct()
            // ->get()
            
            // ->orderBy('title', 'asc')
            // ->get()
            
            // ->latest()
            // ->get()
            
            // ->inRandomOrder()
            // ->get()
            
            // ->orderBy('created_at', 'desc')
            // ->first()
            
            // ->find($id)
            
            // ->where('id', $id)
            // ->count()
            
            // ->insert([
            //     'title' => 'new Post', 'Body' => 'New Body'
            // ])
            
            // ->where('id', '=', 6)
            // ->update([
            //     'title' => 'new Post', 'Body' => 'body updated'
            // ])
            
            ->where('id', '=', 6)
            ->delete();

        dd($posts);
    }
}
