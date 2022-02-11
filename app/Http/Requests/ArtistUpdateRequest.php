<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistUpdateRequest extends FormRequest
{
    //Possibililté de redirection spécifique
    //protected $redirect = '/artists';

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
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => 'required|max:60',
            'lastname' => 'required|max:60',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'firstname.required' => 'Le champ :attribute est obligatoire',
            'lastname.required' => 'Le champ :attribute est obligatoire aussi',
            'max' => 'La longueur doit être de :max caractères',
        ];
    }
}
