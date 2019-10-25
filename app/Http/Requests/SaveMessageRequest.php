<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveMessageRequest extends FormRequest
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
            'name' => 'bail|required|min:5|not_regex:/\d+/',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('I need your name'),
            'name.not_regex' => __('The name field must not have numbers'),
            'name.min' => __('The name must have at least :min items')
        ];
    }
}
