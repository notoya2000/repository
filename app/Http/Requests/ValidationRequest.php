<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => 'required',
            'e-mail' => 'required|string',
            'password' => 'required',
            'post' => 'required|string|max:240',
            //
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'ユーザー名は必須です。',
            'e-mail.required' => 'E-mailは必須です。',
            'password.required' => 'パスワードは必須です。',
            'post.required' => 'POST内容は必須です。',
            'e-mail.string' => 'E-mailは文字列で入力してください',
            'post.string' => 'POST内容は文字列である必要があります。',
            'post.max' => 'POSTは240字以内で入力してください。',
        ];
    }
}
