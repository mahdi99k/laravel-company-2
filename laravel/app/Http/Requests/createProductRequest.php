<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createProductRequest extends FormRequest
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
            "title" => " required | max:100 ",
            "image" => " required | image | mimes:png,jpg,jpeg | max:5000 ",
            "alt" => " required | max:100 ",
            "body" => " required ",
            "webTitle" => " required | max:100 ",
            "keywords" => " required | max:1000 ",
            "description" => " required | max:1000 ",
        ];
    }
}
