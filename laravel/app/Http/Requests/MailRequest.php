<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
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
        'title' => 'required|max:50',
        'content' => 'required|max:800',
        'from' => 'required',
      ];
    }

    /**
     *  バリデーション項目名定義
     * @return array
     */
    public function attributes()
    {
      return [
        'title' => 'タイトル',
        'content' => '本文',
        'from' => '送信者',
      ];
    }

    /**
     * バリデーションメッセージ
     * @return array
     */
    public function messages()
    {
      return [
        'title.required' => ':attributeを入力してください。',
        'title.max' => ':attributeは50文字以下で入力してください。',
        'content.required' => ':attributeを入力してください。',
        'content.max' => ':attributeは800文字以下で入力してください。',
        'from.required' => ':attributeを入力してください。',
      ];
    }
}
