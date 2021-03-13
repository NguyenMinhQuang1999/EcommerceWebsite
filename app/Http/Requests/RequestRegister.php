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
            'email.required' => 'Mời nhập  email!',
            'email.unique' => 'Email da ton tai!',
            'email.email'  => 'Hay nhap dung dinh dang email',
            'name.required' => 'Mời nhập ten!',
            'phone.required' => 'Mời nhập fien thoai!',  
            'phone.unique' => 'Du lieu da ton tai!',           
            'password.required' => 'Mời nhập mat khau!',
        ];
    }
}
