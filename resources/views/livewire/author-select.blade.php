<div>
    <div>

        @foreach($authors as $i => $author)
            <div class="flex items-center mb-2">
                <div class="flex flex-col flex-grow">
                    <div class="flex-grow">
                        <input
                            placeholder="Surname, Name"
                            type="text"
                            name="authors[{{ $i }}]"
                            wire:model="authors.{{ $i }}"
                            class="form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        >
                    </div>
                    @error("authors.{$i}")
                    <div>
                        <p class="text-red-500 text-sm italic">This field cannot be empty.</p>
                    </div>
                    @enderror
                </div>

                @if($i > 0)
                <div class="ml-2 button items-center">
                    <button wire:click.prevent="removeAuthor({{ $i }})" class="text-xs text-gray-500 button">
                        Remove
                    </button>
                </div>
                @endif
            </div>
        @endforeach

    </div>

    <button wire:click.prevent="addAuthor" class="float-right button text-sm text-gray-500">
        Add author
    </button>
</div>
