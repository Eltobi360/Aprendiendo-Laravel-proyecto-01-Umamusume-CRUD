<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUmaRequest extends FormRequest
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
            'nombre'    => 'required|string|max:50',
            'velocidad' => 'required|integer|min:1|max:100',
            'stamina'   => 'required|integer|min:1|max:100',
            'imagen'    => 'nullable|mimes:jpg,jpeg,png,webp|max:5120'
        ];
    }

    public function messages()
    {
        return[
            'nombre.required'    => 'El nombre es obligatorio.',
            'nombre.max'         => 'El nombre no puede tener más de 50 caracteres.',
            'velocidad.required' => 'La velocidad es obligatoria.',
            'velocidad.integer'  => 'La velocidad debe ser un número entero.',
            'stamina.required'   => 'La stamina es obligatoria.',
            'imagen.image'       => 'La imagen debe ser un archivo de imagen.',
            'imagen.max'         => 'La imagen no puede superar los 5 MB.',

        ];
    }



}
