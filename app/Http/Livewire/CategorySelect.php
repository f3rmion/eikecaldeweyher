<?php

namespace App\Http\Livewire;

use App\Category;
use Livewire\Component;

class CategorySelect extends Component
{
	public $categories;
	public $categoriesAvailable;

	public function mount(array $categories = ['']) 
	{
		$this->categoriesAvailable = Category::all()->pluck('name', 'id')->toArray();
		$this->categories = old('categories', $categories);

		// if category is empty, add the first one
		if(! count($this->categories)) {
			if(count($this->categoriesAvailable)){
				$this->categories = [next($this->categoriesAvailable)];
			}
		}
	}

    public function render()
    {
        return view('livewire.category-select');
    }
}
