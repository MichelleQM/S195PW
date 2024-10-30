<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validacionLibros extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'txtisbn' => 'required|min:13',
        'txttitulo' => 'required|max:150',
        'txtautor' => 'required',
        'txtpaginas' => 'required|integer|min:1',
        'txtanio' => ['required', 'integer', 'digits:4', 'min:1000', 'max:' . date('Y')],
        'txtemail' => 'required|email:rfc,dns',
        'txteditorial' => 'required|string'
        ];
    }
}
