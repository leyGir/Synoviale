<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
          // person
          'name' => 'required|min:3|max:100|regex:([A-Z]{1})',
          'firstname' => 'required|min:3|max:100|regex:([A-Z]{1})',
          'email2' => 'nullable|email',
          'phoneNumber1' => 'nullable|numeric|min:10|max:10|regex:([0-9])',
          'phoneNumber2' => 'nullable|numeric|min:10|max:10|regex:([0-9])',
          'comment' => 'nullable|max:250',

          // address
          'street1' => 'nullable|max:250',
          'streetNumber' => 'nullable',
          'street2' => 'nullable|max:250',
          'POBox' => 'nullable',

          // city
          'city' => 'nullable|regex:([A-Z]{1})',
          'postalCode' => 'nullable|min:4|max:4|numeric',
          'canton' => 'nullable|regex:([A-Z]{1})',
          // country
          'country' => 'nullable|regex:([A-Z]{1})'
        ];
    }
}
