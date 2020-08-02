<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function create()
	{
		$categories = Categorie::pluck('name', 'id')->all();

		return view('admin.posts.create', compact('categories'));
	}	
}
