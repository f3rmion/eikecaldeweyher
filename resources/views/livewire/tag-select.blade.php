<div class="mt-1">
    <div>

        @foreach($tags as $i => $tag)
            <div class="flex items-center mb-2">
                <div class="flex flex-col flex-grow">
                    <div class="flex-grow">
                        <div class="relative">
                            <select
                                name="tags[{{ $i }}]"
                                wire:model="tags.{{ $i }}"
                                class="form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                            >
                            @foreach($tagsAvailable as $name)
                                <option value="{{ $name }}">
                                    {{ $name }}
                                </option>
                            @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                    </div>
                    @error("tags.{$i}")
                    <div>
                        <strong class="form-error">
                            {{ $errors->first("tags.{$i}") }}
                        </strong>
                    </div>
                    @enderror
                </div>

                @if($i > 0)
                <div class="ml-2 button items-center">
                    <button wire:click.prevent="removeTag({{ $i }})" class="text-xs text-gray-500 button">
                        Remove
                    </button>
                </div>
                @endif
            </div>
        @endforeach

    </div>

    <button wire:click.prevent="addTag" class="float-right button text-sm text-gray-500">
        Add tag
    </button>
</div>
