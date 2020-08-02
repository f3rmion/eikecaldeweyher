<?php

namespace App;

use App\User;
use App\Tag;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'title',
		'body',
		'user_id',
		'category_id',
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
}
