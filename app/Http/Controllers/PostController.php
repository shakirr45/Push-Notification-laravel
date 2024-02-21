<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Events\PostCreated;

class PostController extends Controller
{
    //
    public function showForm(){
        return view('user.post');
    }

    public function save(Request $request){


        $post_data = $request->validate([

            'title' => 'required|string',
            'author' => 'required|string',
        ]);

        Post::create($post_data);

        $data = [

            'title' => $post_data['title'],
            'author' => $post_data['author'],
        ];

        event(new PostCreated($data));

        return redirect()->back();
    }
}
