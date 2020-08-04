<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
	public function index()
	{
		$posts = Post::where('is_published', true)->orderBy('updated_at', 'desc')->get();
		
		return view('public.research.index', compact('posts'));
	}

	public function show(Post $post)
	{
		return view('public.research.show', compact('post'));
	}
}
