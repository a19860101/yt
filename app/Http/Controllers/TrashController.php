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
        return 'restore'.$id;
    }
}
