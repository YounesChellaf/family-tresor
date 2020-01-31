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
            'phone_number' =>'required',
            'position' =>'required',
            'name' =>'required',
            'type' =>'required',
            'details' =>'required',
        ];
    }
    public function messages()
    {
        return [
            'phone_number.required' => 'الجـــــوال اجبـاري',
            'position.required' => ' الصــــفة اجبـارية',
            'name.required' => 'الاسم الرباعي اجبـاري',
            'type.required' => 'نوع الكربــة اجبـاري',
            'details.required' => 'تفاصيل الكربــة اجبـارية',
        ];
    }
}
