<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserFormRequest extends Request
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
            'name' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6',
            'remember_token' => 'required|max:100'
        ];
    }
}
