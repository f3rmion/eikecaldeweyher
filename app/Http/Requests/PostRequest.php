<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
			'title' => 'required',
			'body' => 'required',
			'categories' => 'required',
			'authors' => 'present|array',
			'authors.*' => 'string|required',
        ];
	}

	public function messages()
	{
		return [
			'title.required' => 'Please add a title.',
			'body.required' => 'Please add a body.',
			'categories.required' => 'Please add a category.',
		];
	}
}
