<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FinancialRequest extends FormRequest
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

            'position' =>'required',
            'type' =>'required',
            'details' =>'required',
        ];
    }
    public function messages()
    {
        return [

            'position.required' => ' الصــــفة اجبـارية',
            'type.required' => 'نوع الكربــة اجبـاري',
            'details.required' => 'تفاصيل الكربــة اجبـارية',
        ];
    }
}
