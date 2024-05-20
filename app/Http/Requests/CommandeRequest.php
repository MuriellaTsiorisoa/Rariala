<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommandeRequest extends FormRequest
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
			'id_panier' => 'required',
			'id_user' => 'required',
			'nom' => 'required',
			'email' => 'required',
			'adresse_livraison' => 'required',
			'reperage_livraison' => 'required',
			'ville' => 'required',
			'province' => 'required',
			'code_postal' => 'required',
			'telephone' => 'required',
			'reference_transfert' => 'required',
			'date_commande' => 'required',
        ];
    }
}
