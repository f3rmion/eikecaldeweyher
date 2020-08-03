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
		$posts = Post::with(['user', 'tags', 'category'])->paginate(10);

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
		$tags = $this->loadData($parameter['tags'], Tag::class);
		
		$post = Post::create([
			'title' => $parameter['title'],
			'body' => $parameter['body'],
			'user_id' => $user->id,
			'category_id' => $parameter['category_id'],
		]);

		$post->save();
		$post->tags()->saveMany($tags);

		return redirect(route('posts.index'))->with('message', 'Post successfully created!');

	}

	protected function loadData($data, $model): array
	{
		$result = [];

		if (! is_array($data)) {
			return [];
		}	

		$data = array_unique($data);

		foreach ($data as $name) {
			if ($name == '') {
				continue;
			}

			$c = $model::where('name', $name)->first();
			if ($c) {
				$results[] = $c; 
			}
		}

		return $result;
	}
}
