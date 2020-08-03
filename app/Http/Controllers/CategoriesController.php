<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
	public function index()
	{
		$categories = Category::orderBy('updated_at', 'desc')->withCount('posts')->get();

		return view('admin.categories.index', compact('categories'));
	}

	public function create()
	{
		return view('admin.categories.create');
	}

	public function store(Request $request)
	{
		$this->validate($request, ['name' => 'required']);

		Category::create(['name' => $request->name]);

		return redirect(route('categories.index'))->with('status', 'Category successfully created!');
	}

	public function edit(Category $category)
	{
		return view('admin.categories.edit', compact('category'));
	}

	public function update(Category $category, Request $request)
	{
		$this->validate($request, ['name' => 'required']);

		$category->update($request->all());

		return redirect(route('categories.index'))->with('status', 'Category successfully updated!');
	}
}
