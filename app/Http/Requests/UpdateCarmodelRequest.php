<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarmodelRequest extends FormRequest
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
            'manufacturer_id' => 'required|not_in:0',
            'name' => 'required|min:2|max:255',
            'start_year' => 'required|integer|min:1900',
            'finish_year' => 'required|integer|min:1900',
        ];
    }
}
