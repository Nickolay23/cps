<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SparepartRequest extends FormRequest
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
        $rules = [
            'name' => 'required|min:3|max:255',
            'sku' => 'required|min:3|max:255|unique:spareparts,sku',
        ];
        if ($this->route()->named('admin.spareparts.update')) {
            $rules['sku'] .= ',' . $this->route()->parameter('sparepart')->id;
        }

        return $rules;
    }
}
