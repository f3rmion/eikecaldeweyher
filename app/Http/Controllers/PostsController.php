<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
	public function index()
	{
		$posts = Post::orderBy('updated_at', 'desc')->get();
		
		return view('admin.posts.index', compact('posts'));
	}

	public function create()
	{
		$categories = Category::pluck('name', 'id')->all();

		return view('admin.posts.create', compact('categories'));
	}	

	public function store(PostRequest $request)
	{
		$parameter = $request->all();
		$user = auth()->user();
		
		$category = Category::where('name', $parameter['categories'][0])->first();

		$post = Post::create([
			'title' => $request->title,
			'body' => $parameter['body'],
			'user_id' => $user->id,
			'category_id' => $category->id,
		]);

		$tagsID = collect($request->tags)->map(function ($tag) {
			return Tag::firstOrCreate(['name' => $tag])->id;
		});

		$post->tags()->attach($tagsID);

		return redirect(route('posts.index'))->with('status', 'Post created sucessfully!');

	}

}
