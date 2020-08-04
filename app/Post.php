<?php

namespace App;

use App\User;
use App\Tag;
use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Mtvs\EloquentHashids\HasHashid;
use Mtvs\EloquentHashids\HashidRouting;

class Post extends Model
{
	use HasHashid, HashidRouting;

	protected $fillable = [
		'title',
		'body',
		'user_id',
		'category_id',
		'doi',
		'authors',
		'cover',
	];

	protected $casts = [
		'authors' => 'array',
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}	

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function tags()
	{
		return $this->belongsToMany(Tag::class);
	}

	public function imageUrl()
	{
		return $this->cover
			? Storage::disk('covers')->url($this->cover)
			: 'https://images.unsplash.com/photo-1508616185939-efe767994166?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=975&q=80';
	}

	public function getAuthors()
	{
		return implode(' and ', (array) $this->authors);
	}
}
