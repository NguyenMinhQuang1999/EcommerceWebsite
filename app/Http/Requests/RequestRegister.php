<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestRegister extends FormRequest
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
            //
            'email' => 'required|min:3|max:190|email|unique:users,email,'.$this->id,
            'name' => 'required',
            'password' => 'required',
            'phone' => 'required|unique:users,phone,'.$this->id,
    
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email không được để trống!',
            'email.unique' => 'Email đã tồn tại!',
            'email.email'  => 'Email không hợp lệ',
            'name.required' => 'Tên không được để trống!',
            'phone.required' => 'Số điện thoại không được để trống!',  
            'phone.unique' => 'Số điện thoại đã tồn tại!',           
            'password.required' => 'Mật khẩu không được để trống!',
        ];
    }
}