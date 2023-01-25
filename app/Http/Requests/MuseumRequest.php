<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MuseumRequest extends FormRequest
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
            'name' => 'required|min:5|max:100',
            'address' => 'required|min:5|max:150',
            'nation' => 'required|min:5|max:50'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome - Campo obbligatorio.',
            'name.min' => 'Nome - Minimo :min caratteri.',
            'name.max' => 'Nome - Massimo :max caratteri.',
            'address.required' => 'Indirizzo - Campo obbligatorio.',
            'address.min' => 'Indirizzo - Minimo :min caratteri.',
            'address.max' => 'indirizzo - Massimo :max caratteri.',
            'nation.required' => 'Nazione - Campo obbligatorio.',
            'nation.min' => 'Nazione - Minimo :min caratteri.',
            'nation.max' => 'Nazione - Massimo :max caratteri.',
        ];
    }
}
