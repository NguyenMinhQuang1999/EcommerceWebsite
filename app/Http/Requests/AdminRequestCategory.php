<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestCategory extends FormRequest
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
            'c_name' => 'required|max:190|min:3|unique:categories,c_name,'.$this->id
            //
        ];
    }

    public function messages() {
        return[
            'c_name.required' => 'Mời nhập tên danh mục sản phẩm!',
            'c_name.unique' => 'Du lieu da ton tai!',
            'c_name.max' => 'Ban nhap qua ky tu cho phep!',
            'c_name.min' => 'Nhap it nhat 3 ky tu tro len!',
        ];
    }
}
