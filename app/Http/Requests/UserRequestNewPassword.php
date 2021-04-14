<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequestNewPassword extends FormRequest
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
            'password' => 'required',
            'password_confirm' => 'required|same:password'
            //
        ];
    }

    public function messages() {
        return[
            'password.required' => 'Du lieu khong de trong!',
            'password_confirm.required' => 'Du lieu khong de trong!',
            'password_confirm.same' => 'Mat khau khong khop!',
          
        ];
    }
}
