<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestSlide extends FormRequest
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
            'sd_title' => 'required',
            'sd_link' => 'required',


            //
        ];
    }

    public function messages() {
        return[
            'sd_title.required' => 'Mời nhập tên tiêu đề!',
            'sd_link.required' => 'Mời nhập tên đường dẫn!',

        ];
    }
}