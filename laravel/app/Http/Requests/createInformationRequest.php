<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createInformationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  /* show errors  ===>   login to site */
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "phone" => " required | max:100  ",
            "email" => " required | email | max:100 ",
            "hours" => " required | max:100",
        ];
    }
}
