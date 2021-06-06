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
            'atb_name.unique' => 'Dữ liệu đã tồn tại!',
            'atb_name.max' => 'Bạn nhập quá ký tự cho phép!',
            'atb_name.min' => 'Nhập ít nhất 3 ký tự trở lên!',
            'atb_type'=> 'Dữ liệu không được để trống',
            'atb_category_id'=> 'Dữ liệu không  được để trống',
        ];
    }
}