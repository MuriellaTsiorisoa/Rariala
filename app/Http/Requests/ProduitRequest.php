<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitRequest extends FormRequest
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
			'id_categorie' => 'required',
			'id_modele' => 'required',
			'nom' => 'required',
			'paragraphe' => 'required',
			'quantite' => 'required',
			'default' => 'required',
			'hauteur' => 'required',
			'largeur' => 'required',
			'prix_unitaire' => 'required',
			'5' => 'required',
			'taille' => 'required',
			'MM' => 'required',
			'GM' => 'required',
			'type' => 'required',
			'modele_existant' => 'required',
			'produit' => 'required',
			'image_urls' => 'required',
        ];
    }
}
