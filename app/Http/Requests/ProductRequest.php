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
            'name' => 'required|min:3',
            'type' => 'required',
            'price' => 'required|numeric|min:0',
            'description' => 'required',
            'img'=> 'nullable|image'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome è obbligatorio',
            'name.min' => 'Il nome deve essere  di alme 3 caratteri',
            'type.required' => 'Il tipo è obbligatorio',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.min' => 'Il prezzo deve essere superiore a o',
            'price.numeric' => 'Il prezzo deve essere un numero',
            'description.required' => 'la descrizione è obbligatoria',
            'img.image' => 'Il campo immagine deve essere un immagine'
        ];
    }
}
