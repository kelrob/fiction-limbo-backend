<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcessPostMediaRequest extends FormRequest
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
            'post_id' => 'required',
            'title_art' => 'required|file|image',
            'hero_image' => 'required|file|image',
            'hero_video' => 'required|mimes:mp4',
            'audio' => 'required|mimes:mp3',
            'background_image' => 'required|file|image',
            'image_credits' => 'required',
            'description' => 'required',
            'credits' => 'required'
        ];
    }
}
