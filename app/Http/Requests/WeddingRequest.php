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

            'wedding_date' =>'required',
            'bank_name' =>'required',
            'iban' =>'required',
        ];
    }
    public function messages()
    {
        return [
            'wedding_date.required' => 'تاريخ العرس اجبـاري',
            'iban.required' => 'رقــــم الحساب البنكي iban اجبـاري',
            'bank_name.required' => 'اسم البنك اجبـاري',
        ];
    }
}
