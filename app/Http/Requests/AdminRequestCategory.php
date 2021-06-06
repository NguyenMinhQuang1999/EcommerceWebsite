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
            'c_name.unique' => 'Danh mục đã tồn tại!',
            'c_name.max' => 'Bạn nhập quá ký tự cho phép!',
            'c_name.min' => 'Nhập ít nhất 3 ký tự!',
        ];
    }
}