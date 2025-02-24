<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
			'nombre' => 'required|string',
            'material_id' => 'nullable|exists:materials,id',
			'precio' => 'required|string',
			'stock' => 'required',
			// 'imagen' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
			'descripcion' => 'nullable|string',
            'estado_id' => 'required',
            'categories' => 'required|array',
          
    

        ];
    }
}
