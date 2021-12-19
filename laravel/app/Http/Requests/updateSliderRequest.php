<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateSliderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  /* must first user is login  باید حتما لاگین کرده باش تا ببینه رکوست ها  */
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required | max:200',
            'caption' => 'required | max:500',
            'image' => ' image | mimes: png,jpg,jpeg | max:5000',
            'alt' => 'required | max:100',
        ];
    }
}
