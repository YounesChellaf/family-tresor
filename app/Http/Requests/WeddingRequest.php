<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeddingRequest extends FormRequest
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
            'wedding_date' =>'required',
            'name' =>'required',
            'bank_name' =>'required',
            'iban' =>'required',
        ];
    }
    public function messages()
    {
        return [
            'phone_number.required' => 'الجـــــوال اجبـاري',
            'wedding_date.required' => 'تاريخ العرس اجبـاري',
            'name.required' => 'الاسم الرباعي اجبـاري',
            'iban.required' => 'رقــــم الحساب البنكي iban اجبـاري',
            'bank_name.required' => 'اسم البنك اجبـاري',
        ];
    }
}
