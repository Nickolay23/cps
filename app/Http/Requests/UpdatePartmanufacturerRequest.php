<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePartmanufacturerRequest extends FormRequest
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
            'partmanufacturer' => 'required|min:2|max:255|unique:partmanufacturers,partmanufacturer,' . $this->route()->parameter('partmanufacturer')->id,
        ];
    }
}
