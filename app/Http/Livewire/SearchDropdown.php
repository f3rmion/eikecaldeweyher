<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Post;
use Mtvs\EloquentHashids\HasHashid;
use Mtvs\EloquentHashids\HashidRouting;

class SearchDropdown extends Component
{	
	use HasHashid, HashidRouting;
	use WithPagination;

	public $search = '';

	public function updatingSearch() 
	{
		$this->resetPage();
	}

    public function render()
	{
		$searchResults = [];

		if (strlen($this->search) >= 2) {
			$searchResults = Post::where('title', 'like', '%' . trim($this->search) . '%')
			    ->get();
		}

		return view('livewire.search-dropdown', [
			'searchResults' => collect($searchResults)->take(5),
		]);
    }
}
