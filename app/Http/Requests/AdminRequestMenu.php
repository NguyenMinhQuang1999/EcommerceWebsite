<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestMenu extends FormRequest
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
            'mn_name' => 'required|max:190|min:3|unique:menus,mn_name,'.$this->id
            //
        ];
    }

    public function messages() {
        return[
            'mn_name.required' => 'Mời nhập tên menu!',
            'mn_name.unique' => 'Dữ liệu đã tồn tại ',
            'mn_name.max' => 'Nhập quá kí tự cho phép!',
            'mn_name.min' => 'Nhập ít nhất 3 kí tự!',
        ];
    }
}