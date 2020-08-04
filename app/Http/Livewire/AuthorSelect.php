<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AuthorSelect extends Component
{
    public $authors;

    public function mount(array $authors = [''])
    {
        $this->authors = old('authors', $authors);
    }

    public function addAuthor(): void
    {
        $this->authors[] = '';
    }

    public function removeAuthor(int $i): void
    {
        unset($this->authors[$i]);
        $this->authors = array_values($this->authors);
    }

    public function render()
    {
        return view('livewire.author-select');
    }
}
