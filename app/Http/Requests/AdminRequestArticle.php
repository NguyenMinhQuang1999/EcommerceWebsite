<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestArticle extends FormRequest
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
            'a_name' => 'required|min:3|max:190|unique:articles,a_name,'.$this->id,
            'a_menu_id' => 'required',
            'a_description' => 'required',
            'a_content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'a_name.required' => 'Mời nhập ten bai viet!',
             'a_description.required' => 'Mời nhập mô tả!',
            'a_content.required' => 'Mời nhập nội dung!',
            'a_menu_id.required' => 'Mời nhập chọn meu!',
        ];
    }
}
