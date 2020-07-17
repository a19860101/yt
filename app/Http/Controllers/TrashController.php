<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class TrashController extends Controller
{
    //
    public function index(){
        $posts = Post::onlyTrashed()->get();
        return view('post.trash',compact('posts'));
    }
    public function restore($id){
        $post = Post::onlyTrashed()->find($id);
        $post->restore();
        return redirect('trash');
    }
    public function delete(Request $request){
        $post = Post::onlyTrashed()->find($request->id);
        $post->forceDelete();

        return redirect('trash');

    }
}
