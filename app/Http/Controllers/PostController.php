<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $posts = DB::select('SELECT * FROM posts');
        $posts = DB::table('posts')->get();
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // DB::insert('INSERT INTO posts(title,content,created_at,updated_at)VALUES(?,?,?,?)',[
        //     $request -> title,
        //     $request -> content,
        //     now(),
        //     now()
        // ]);

        DB::table('posts')->insert([
            'title'         => $request->title,
            'content'       => $request->content,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
        return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $posts = DB::select('SELECT * FROM posts WHERE id = ?',[$id]);
        // return view('post.show',compact('posts'));
        
        // $post = DB::table('posts')->find($id);
        $post = DB::table('posts')->find($id);
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // $posts = DB::select('SELECT * FROM posts WHERE id = ?',[$id]);
        // return view('post.edit',compact('posts'));

        $post = DB::table('posts')->find($id);
        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        DB::update('UPDATE posts 
                    SET title=?,content=?,updated_at=? 
                    WHERE id=?',[
            $request -> title,
            $request -> content,
            now(),
            $id
        ]);
        return redirect('post');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::delete('DELETE FROM posts WHERE id = ?',[$id]);
        return redirect('post');
    }
}
