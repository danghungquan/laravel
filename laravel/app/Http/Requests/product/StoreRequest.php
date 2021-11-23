<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'file_upload' => 'required',
            'description' => 'required',
            'method_sell' => 'required',
            'from_day_1' => 'required',
            'from_time_1' => 'required',
            'day_1' => 'required',
            'time_1' => 'required',
            'quantity'  => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'trường này không đựơc trống!',
            'file_upload.required' => 'vui lòng chọn một ảnh!',
            'description.required' => 'trường này không đựơc trống!',
            'method_sell.required' => 'trường này không đựơc trống!',
            'from_day_1.required' => 'trường này không đựơc trống!',
            'from_time_1.required' => 'trường này không đựơc trống!',
            'day_1.required' => 'trường này không đựơc trống!',
            'time_1.required' => 'trường này không đựơc trống!',
            'quantity.required' => 'trường này không đựơc trống!'
        ];
    }
}
