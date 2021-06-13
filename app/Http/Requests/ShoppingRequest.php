<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShoppingRequest extends FormRequest
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
            'tst_name' => 'required',
          
            'tst_address' => 'required',
            'tst_phone' => 'required',
            'tst_email' => 'email'
            //
        ];
    }

    public function messages() {
        return[
            'tst_name.required' => 'Mời nhập tên!',
            'tst_address.required' => 'Mời nhập địa chỉ!',
            'tst_phone.required' => 'Mời nhập số điện thoại!',
            'tst_email.email' => 'Mời nhập email hợp lệ!',
          
        ];
    }
}
