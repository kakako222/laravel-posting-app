<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**バリデーションメッセージをカスタマイズする
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title.required' => 'タイトルは必須です。',
            'mail.required' => 'メールアドレスを入力してください。',
            'pass.required' => 'パスワードを入力してください。',
            'image.mimes' => '指定できる画像形式は jpeg, png, jpg, gif です。',
            'image.max' => '画像ファイルは2MB以下にしてください。',
        ];
    }
}
