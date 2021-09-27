<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcessPostRequest extends FormRequest
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
            'type_id' => 'required',
            'series_id' => 'required',
            'username' => 'required',
            'genre_id' => 'required',
            'tags' => 'required',
            'cta_btn_text' => 'required',
            'cta_btn_link' => 'required',
            'post' => 'required'
        ];
    }
}
