<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|between:3,25|regex:/^[A-Za-z0-9\-\_]+$/|unique:users,name,'.\Auth::id(),
            'email' => 'required|email',
            'introduction' => 'max:80'
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => '用户名必须唯一',
            'name.between' => '用户名3-25',
            'name.regex' => '用户名英文数字下滑线',
            'name.required' => '用户名必须'
        ];
    }
}