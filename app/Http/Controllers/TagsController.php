<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
	public function index()
	{
		$tags = Tag::orderBy('updated_at', 'desc')->withCount('posts')->get();

		return view('admin.tags.index', compact('tags'));
	}

	public function create()
	{
		return view('admin.tags.create');
	}

	public function store(Request $request)
	{
		$this->validate($request, ['name' => 'required']);

		Tag::create(['name' => $request->name]);

		return redirect(route('tags.index'))->with('status', 'Tag successfully created!');
	}


	public function edit(Tag $tag)
	{
		return view('admin.tags.edit', compact('tag'));
	}

	public function update(Tag $tag, Request $request)
	{
		$this->validate($request, ['name' => 'required']);

		$tag->update($request->all());

		return redirect(route('tags.index'))->with('status', 'Tag successfully updated!');
	}

	public function delete(Tag $tag)
	{
		$tag->delete();

		return redirect(route('tags.index'))->with('status', 'Tag successfully deleted!');	
	}
}
