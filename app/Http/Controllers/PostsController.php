<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        $users = auth()->user()->following()->pluck('profiles.user_id');

        // $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);
        $posts = Post::with('user')->latest()->paginate(5);
        $user=User::with('profile')->latest()->paginate(5);
    //    dd($user);

    // $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

    // $postCount = Cache::remember(
    //     'count.posts.' . $user->id,
    //     now()->addSeconds(30),
    //     function () use ($user) {
    //         return $user->posts->count();
    //     });



    // return view('posts.index', compact('posts','user', 'follows', 'postCount', 'followersCount', 'followingCount'));


        return view('posts.index', compact('posts','user','follows '));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
