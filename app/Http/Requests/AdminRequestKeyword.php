<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestKeyword extends FormRequest
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
            'k_description' => 'min: 3',
            'k_name' => 'required|max:190|min:3|unique:key_words,k_name,'.$this->id
        ];
    }

    public function message() {
        return [
            'k_name.requried' =>'Tên không được để trống!',
            'k_name.unique' =>'Tên đã tồn tại!',
            'k_name.max' =>'Dữ liệu không vuợt quá  190 ký tự!',
            'k_name.min' =>'Tên nhập ít nhất ự ký tự!',
        ];
    }
}