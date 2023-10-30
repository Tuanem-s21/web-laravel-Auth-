<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'Vui long nhap email',
            'email.email' => 'Vui long nhap dinh dang email',
            'email.unique' => 'Email da ton tai',
            'password.required' => 'Vui long nhap mat khau',
            'password.min' => 'Mat khau phai co it nhat 8 ky tu',
            'password.confirmed' => 'Mat khau khong trung khop',


        ]; 
    }
}
