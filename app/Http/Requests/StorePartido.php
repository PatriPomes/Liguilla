<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartido extends FormRequest
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
            'fecha_partido'=>'required|after:today',
            'hora_partido'=>'required',
            'equipo_local_id' => 'required|exists:equipos,id',
            'equipo_visitante_id' => 'required|exists:equipos,id|different:equipo_local_id',
        ];
    }
    public function messages():Array{

        return[
            'fecha_partido.required'=>'Hay que planificar, no te olvides la fecha!',
            'fecha_partido.after'=>'No puedes programar un partido con fecha pasada',
            'hora_partido'=>'Es necessario indicar hora del partido',
            'equipo_local_id.required'=>'No te olvides indicar quien sera el Equipo Local',
            'equipo_visitante_id.required'=>'No te olvides indicar quien sera el Equipo Visitante',
            'equipo_visitante_id.different'=>'El equipo Local y el Equipo Visitante no pueden ser el mismo', 
        ];
    }
}
