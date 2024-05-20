<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Variant_optionRequest extends FormRequest
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
			'id_variant' => 'required',
			'variant_option' => 'required',
			'prix_unitaire' => 'required',
			'5' => 'required',
			'image_urls' => 'required',
        ];
    }
}
