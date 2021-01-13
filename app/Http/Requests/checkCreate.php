<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class checkCreate extends FormRequest
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
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'userName' => 'required'
        ];
    }

    public function messages()
    {
        $messages =[
            'name.required' => 'nhập tên đại lý',
            'email.required'=>'Nhập email',
            'phone.required '=>'Yêu cầu nhâp số điện thoại!',
//            'phone.regex'=>'Số điện thoại không hợp lệ!',
            'address.required'=>'Yêu cầu nhập địa chỉ!',
            'userName.required' => 'Yêu cầu nhập tên người quản lý'
        ];

        return $messages;

    }
}
