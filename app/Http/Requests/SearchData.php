<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchData extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'street_address' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'property_type' => 'required',
            'county' => 'required'
        ];
    }
}
