<?php

// PostController.php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();

        return view('index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('show', compact('post'));
    }


    public function create()
    {

        return view('post');
    }

    public function store(Request $request)
    {
        $photo = $request->file('photo');
        $photoName = rand(1, 100). '-'. time();
        $photoExtension = $photo->getClientOriginalExtension();
        $photoPath = public_path(). '/photos/';
        $photoFullPath = '/photos/' . $photoName . '.' . $photoExtension;
        $photo->move($photoPath, $photoName . '.' . $photoExtension);


        $post =  new Post;
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->photo = $photoFullPath;
        $post->trailer = $request->get('trailer');
        $post->year = $request->get('year');
        $post->genre = $request->get('genre');

        $post->save();

        return redirect('posts');

    }
}
