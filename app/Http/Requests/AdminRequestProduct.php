<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestProduct extends FormRequest
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
            'pro_name' => 'required|min:3|max:190|unique:products,pro_name,'.$this->id,
            'pro_price' => 'required',
            'pro_category_id' => 'required',
            'pro_description' => 'required',
            'pro_content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'pro_name.required' => 'Mời nhập tên sản phẩm!',
            'pro_price.required' => 'Mời nhập giá sản phẩm!',
            'pro_description.required' => 'Mời nhập mô tả!',
            'pro_content.required' => 'Mời nhập nội dung!',
            'pro_category_id.required' => 'Mời nhập chọn danh mục!',
        ];
    }
}