<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            'name' => ['required'],
            'email' => ['required', 'email:rfc,dns'],
            'pass' => ['required'],
        ];
    }

    public function message()
    {
        return [
                'name.required' => 'お名前を入力してください',
                'email.required' => 'メールアドレスを入力してください',
                'email.numeric' => 'メールアドレスは「ユーザー名@ドメイン」形式で入力してください',
                'pass.required' => 'パスワードを入力してください',
        ];
    }

}
