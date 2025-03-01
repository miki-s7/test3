<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Weight_targetRequest extends FormRequest
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
            'now_weight' => ['required','digits:4','decimal(4,1)'],
            'target_weight' => ['required', 'digits:4','decimal(4,1)'],
        ];

        return [
                'now_weight.required' => '現在の体重を入力してください',
                'now_weight.digits:4' => '4桁までの数字で入力してください',
                'now_weight.decimal(4,1)' => '小数点は1桁で入力してください',
                'target_weight.required' => 'メールアドレスを入力してください',
                'target_weight.digits:4' => '4桁までの数字で入力してください',
                'target_weight.decimal(4,1)' => '小数点は1桁で入力してください',
        ];
    }
}
