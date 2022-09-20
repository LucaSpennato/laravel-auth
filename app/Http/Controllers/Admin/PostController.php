<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Post;
use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newData = $request->all();
        $newPost = new Post();

        // ? aggirono lo slug
        $lastPostId = (Post::orderBy('id', 'desc')->first()->id) +1;
        $newData['slug'] = Str::slug($newData['title'] . '' . $lastPostId, '-');
        $newData['post_date'] = new DateTime();


        $newPost->create($newData);

        return redirect()->route('admin.posts.show', $newData['slug']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // ? per usarer la dependecy injecction: show (Post $post)
        // ? e fai solo il return, tutto qua. In index per passare le informazioni si passa con l'id
        // ?<a href="{{ route('admin.posts.show', $post->id) }}">Nome</a>
        // ! chiedi come far andare la show con URI slug usando la dependency injection!!!
        $post = Post::where('slug', $slug)->first();
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
    }
}
