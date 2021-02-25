<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestAttribute extends FormRequest
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
            'atb_name' => 'required|max:190|min:3|unique:attributes,atb_name,'.$this->id,
            'atb_type' => 'required',
            'atb_category_id' => 'required',

            //
        ];
    }

    public function messages() {
        return[
            'atb_name.required' => 'Mời nhập tên thuộc tính sản phẩm!',
            'atb_name.unique' => 'Du lieu da ton tai!',
            'atb_name.max' => 'Ban nhap qua ky tu cho phep!',
            'atb_name.min' => 'Nhap it nhat 3 ky tu tro len!',
            'atb_type'=> 'Du lieu khong duoc de trong',
            'atb_category_id'=> 'Du lieu khong duoc de trong',
        ];
    }
}
