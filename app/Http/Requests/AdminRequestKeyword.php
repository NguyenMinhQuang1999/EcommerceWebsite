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
            'k_name.requried' =>'Du lieu khong duoc de trong!',
            'k_name.unique' =>'Du lieu khong ton tai!',
            'k_name.max' =>'Du lieu khong qua 190 ky tu!',
            'k_name.min' =>'Du lieu nhieu hon 3 ky tu!',
        ];
    }
}
