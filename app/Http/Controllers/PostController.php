<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redis; // TODO queue - redis




class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::paginate(6); //TODO: Definir paginate e indicar el número de posts por página
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserFormRequest $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = $request->user()->id;

        $post->save();

        return view('post.show', compact('post'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post) // TODO: Para ver un único post
    {

        $counter = 0;

        if(Redis::exists('post:views:' . $post->id)){  // TODO redis
            Redis::incr('post:views:' .$post->id);
            $counter = Redis::get('post:views:'.$post->id);
        }else{
            Redis::set('post:views:'. $post->id, 0);
        }

        return view('post.show', compact('post', 'counter'));
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.edit', compact("post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UserFormRequest $request, Post $post)  // TODO: POST actualziado
    {
        $this->authorize('update', $post);

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = $request->user()->id;
        $post->save();

        return redirect()
            ->route('posts.edit', ['post' => $post])
            ->with('message', 'Post actualizado');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // $this->authorize('delete', $post); // TODO: Policy
        if(Gate::denies('delete-post', $post)){ // TODO Gates
            return redirect()->back();
        }

        $post->delete();
        return redirect()->route('my-posts')
            ->with('message', 'Post eliminado correctamente');
    }

    public function myPosts()
    {
        $posts = Auth::user()->posts;
        return view('post.my', compact('posts'));
    }
}
