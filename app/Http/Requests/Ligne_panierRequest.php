<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Ligne_panierRequest extends FormRequest
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
        return
        [
			'id_personnalisation' => 'required',
			'id_produit' => 'required',
			'quantite' => 'required',
			'default' => 'required',
        ];
    }
}