<?php

namespace App\Http\Requests\Paciente;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            "nombres"=>"required|string",
            "apellidos"=>"required|string",
            "temperatura"=>"required|string",
            "f_cardiaca"=>"required|string",
            "peso"=>"required|numeric",
            "talla"=>"required|numeric",
            "p_arterial"=>"required|string",
            "saturacion"=>"required|string",
            "s_corporal"=>"nullable|numeric",
            "imc"=>"nullable|numeric",
            "r_enfermedad"=>"nullable|string",
            "clasificacion_imc"=>"nullable|string"
        ];
    }
}
