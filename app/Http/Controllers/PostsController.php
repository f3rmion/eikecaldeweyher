<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function index()
	{
		$posts = Post::with(['user', 'tags', 'category'])->paginate(10);

		return view('admin.posts.index', compact('posts'));
	}

	public function create()
	{
		$categories = Categorie::pluck('name', 'id')->all();

		return view('admin.posts.create', compact('categories'));
	}	
}
