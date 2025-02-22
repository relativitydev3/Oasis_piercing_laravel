<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleRequest extends FormRequest
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
			'Nombre_Cliente' => 'required|string',
			'Apellido_Cliente' => 'string',
			'Direccion_Cliente' => 'required|string',
			'Ciudad_Cliente' => 'required|string',
			'Departamento_Cliente' => 'required|string',
			'Telefono_Cliente' => 'required|string',
			'Correo_Cliente' => 'string',
			'user_id' => 'required',
			'estado' => 'required|string',
        ];
    }
}
