<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateArticleRequest extends Request
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
            //Articles
            'title' => 'required|min:3',
            'body' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'published_at' => 'required|date'
        ];
    }
}
