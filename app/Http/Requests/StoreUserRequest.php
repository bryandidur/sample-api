<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|min:2|max:255',
            'email' => 'required|min:2|max:255|email|unique:users',
            'password' => 'required|min:6|max:20',
            'colorIds' => 'required|array|min:1',
            'colorIds.*' => 'required|numeric|exists:colors,id',
        ];
    }
}
