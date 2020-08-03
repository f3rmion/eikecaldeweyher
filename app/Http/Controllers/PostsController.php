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

	public function edit(Post $post)
	{
		if ($post->user_id != auth()->user()->id) {
			return redirect(route('posts.index'))->with('status', "You can not edit others posts!");
		}

		$categories = Category::pluck('name', 'id')->all();
		$tags = Tag::pluck('name', 'name')->all();

		return view('admin.posts.edit', compact('post', 'categories', 'tags'));
	}

	public function update(Post $post, PostRequest $request)
	{
		$parameter = $request->all();

		$category = Category::where('name', $parameter['categories'][0])->first();

		$post->update([
			'title' => $parameter['title'],
			'body' => $parameter['body'],
			'categories' => $category->id,
		]);

		$tagsID = collect($request->tags)->map(function ($tag) {
			return Tag::firstOrCreate(['name' => $tag])->id;
		});

		$post->tags()->sync($tagsID);

		return redirect(route('posts.index'))->with('status', 'Post seccessfully updated!');
	}

	public function publish(Post $post)
	{
		$post->is_published = !$post->is_published;
		$post->save();

		if ($post->is_published) {
			$message = 'Post has been published!';
		} else {
			$message = 'Post has been unpublished!';
		}
		return redirect(route('posts.index'))->with('status', $message);
	}
}
