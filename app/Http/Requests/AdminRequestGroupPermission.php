<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestGroupPermission extends FormRequest
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
            'name' => 'required|max:190|min:3|unique:group_permission,name,'.$this->id
        ];
    }

    public function messages() {
        return [
            'name.requried' =>'Tên không được để trống!',
            'name.unique' =>'Tên đã tồn tại!',
            'name.max' =>'Dữ liệu không vuợt quá  190 ký tự!',
            'name.min' =>'Tên nhập ít nhất  ký tự!',
        ];
    }
}
