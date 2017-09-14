<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'fullName'=>'required|unique:users,name',
            'password'=>'required',
            'passwordAgain'=>'required|same:password',
            'email'=>'email',
        ];
    }

    public function messages(){
        return [
            'fullName.required'=>'Tài khoản không thể bỏ trống',
            'fullName.unique'=>'Tài khoản đã tồn tại',
            'password.required'=>'Mật khẩu không thể bỏ trống',
            'passwordAgain.required'=>'Nhập lại mật khẩu không thể bỏ trống',
            'passwordAgain.same'=>'Mật khẩu không khớp',
            'email'=>'Không phải một email',
        ];
    }
}
