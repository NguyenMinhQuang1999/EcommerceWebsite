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
            'mn_name.unique' => 'Du lieu da ton tai!',
            'mn_name.max' => 'Ban nhap qua ky tu cho phep!',
            'mn_name.min' => 'Nhap it nhat 3 ky tu tro len!',
        ];
    }
}
