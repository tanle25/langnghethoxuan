<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
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
            'name' => 'required',
            'page_id' => 'required',
            'status'   => 'required',
        ];
        
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống.',
            'page_id.required' => 'Trang hiển thị không được để trống.',
            'status.required' => 'Trạng thái không được để trống.',
        ];
    }
}
