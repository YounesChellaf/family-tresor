<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhoneNumberRequest extends FormRequest
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
            'number' => 'required'
        ];
    }

    public function messages()
    {
        return [
          'name.required' => 'الاســــم الربـاعي اجباري' ,
          'number.required' => 'رقـــم الجـــوال اجباري'
        ];
    }
}
