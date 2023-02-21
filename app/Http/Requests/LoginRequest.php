<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
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

    public function messages()
    {
        return [
            'email.required' => 'Error, email tidak boleh kosong',
            'email.email' => 'Error, format email salah (cth : xxxx@email.com)',
            'password.required' => 'Error, password tidak boleh kosong',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'message'   => 'Validation errors',
            'data'      => $validator->errors(),
        ], 422, [
            "X-Status-Reason" => "Validation failed"
        ]));
    }

    public function rules()
    {
        return [
            //
            "email" => "required|email",
            "password" => "required",
        ];
    }
}
