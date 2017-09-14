<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'account'=>'required',
            'password'=>'required',
        ];
    }

    public function messages(){
        return [
            'account.required'=>'Tài khoản không thể bỏ trống',
            'password.required'=>'Mật khẩu không thể bỏ trống',
        ];
    }
}
