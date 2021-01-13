<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class checkEdit extends FormRequest
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
            'adsress' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/(0)[0-9]{10}/',
            'userName' => 'required'
        ];
    }

    public function messages()
    {
        $messages =[
            'name.required' => 'nhập tên đại lý',
            'email.required'=>'Nhập email',
            'phone.required '=>'Số điện thoại không hơp lệ!',
            'address.required'=>'Yêu cầu nhập địa chỉ!',
            'userName.required' => 'Yêu cầu nhập tên người quản lý'
        ];

        return $messages;

    }
}
