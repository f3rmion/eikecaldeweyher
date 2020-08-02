<?php

namespace App;

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
}
