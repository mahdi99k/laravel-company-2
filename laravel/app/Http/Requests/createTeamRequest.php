<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createTeamRequest extends FormRequest
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
            "image" => " required | image | mimes:png,jpg,jpeg | max:5000 ",
            "alt" => " required | max:100 ",
            "fullname" => " required | max:100 ",
            "job" => " required | max:100 ",
            "linkedin" => "nullable | max:200 ",
            "telegram" => "nullable | max:200 ",
            "instagram" => "nullable | max:200 ",
        ];
    }
}