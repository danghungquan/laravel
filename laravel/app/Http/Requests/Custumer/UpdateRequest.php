<?php

namespace App\Http\Requests\Custumer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'full_name' => 'required',
            'address' => 'required',
            'job' => 'required',
            'sex' => 'required',
            'year_of_birth' => 'required',
            'phone' => 'required',
            'contact' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'first_name.required' => 'cannot be left blank!',
            'last_name.required' => 'cannot be left blank!',
            'full_name.required' => 'cannot be left blank!',
            'address.required' => 'cannot be left blank!',
            'job.required' => 'cannot be left blank!',
            'sex.required' => 'cannot be left blank!',
            'year_of_birth.required' => 'cannot be left blank!',
            'phone.required' => 'cannot be left blank!',
            'contact.required' => 'cannot be left blank!',
        ];
    }
}
