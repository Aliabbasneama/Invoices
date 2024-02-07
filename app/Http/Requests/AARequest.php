<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AARequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'active'=>'required',
            
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'اسم الوحدة مطلوب',
            'active.required'=>'حالة تفعيل الوحدة مطلوب',

        ];
    }
}
