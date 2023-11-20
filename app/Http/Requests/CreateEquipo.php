<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEquipo extends FormRequest
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
            'name' => 'required|unique:equipos',
            'campo' => 'required',
        ];
    }
    public function messages():array{
        return[
            'name.required' => 'Upps se te olvido poner el nombre de tu equipo',
            'name.unique'=>'Este equipo ya consta en nuestra base de datos',
            'campo.required' => 'Uisss tendras que poner un campo donde jugar vuestros partidos locales',
        ];
    }
}
