<?php

namespace App\Http\Requests\Partner;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'new_password'  =>  'required|min:6',
            're_password'   =>  'required|same:new_password',
        ];
    }

    public function messages()
    {
        return [
            'new_password.*'  =>  'Mật khẩu phải từ 6 ký tự',
            're_password.*'   =>  'Mật khẩu nhập lại không giống',
        ];
    }
}
