<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signinRequest extends FormRequest
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
            'email' => 'email|required|unique:posts|max:255',
            'password' => 'required|min:6|max:12',
        ];
    }
    public function messages(){
        return[
            'email.required' => "E-mail is needed",
            'email.email' => "Not a valid e-mail address"
        ];
    }

}
