<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BicicletaRequest extends FormRequest
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
            //
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'fecha_fabricacion' => 'required|date',
            'precio' => 'required|numeric',
            'descripcion' => 'required|string',
            'disponible' => 'required|in:si,no',
            'cantidad_disponible' => 'required|integer|min:1',
            'estado' => 'required|in:blanco,negro,gris,azul,amarillo,rojo',
        ];
    }
}
