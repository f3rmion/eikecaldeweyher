<?php

namespace App\Http\Livewire;

use App\Tag;
use Livewire\Component;

class TagSelect extends Component
{
	public $tags;
	public $tagsAvailable;

	public function mount(array $tags = ['']) 
	{
		$this->tagsAvailable = Tag::all()->pluck('name')->toArray();
		$this->tags = old('tags', $tags);

		// if tag is empty, add the first one
		if(! count($this->tags)) {
			if(count($this->tagsAvailable)){
				$this->tags = [next($this->tagsAvailable)];
			}
		}
	}

	public function addTag(): void
	{
		$this->tags[] = ''; 
	}

	public function removeTag(int $i): void
	{
		unset($this->tags[$i]);
		$this->tags = array_values($this->tags);
	}

    public function render()
    {
        return view('livewire.tag-select');
    }
}
