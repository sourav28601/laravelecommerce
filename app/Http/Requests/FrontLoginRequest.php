<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FrontLoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email_log' => 'required',
            'password_log' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email_log.required' => 'Enter Your Email',
            'password_log.required' => 'Enter Your Password'
        ];
    }
}
