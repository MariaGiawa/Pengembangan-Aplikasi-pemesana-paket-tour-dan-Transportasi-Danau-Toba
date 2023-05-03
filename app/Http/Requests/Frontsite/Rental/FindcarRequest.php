<?php

namespace App\Http\Requests\Frontsite\Rental;

use Illuminate\Foundation\Http\FormRequest;

class FindcarRequest extends FormRequest
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
                'name' => 'required|string',
                'type' => 'required|string'
            ];
    }
}
