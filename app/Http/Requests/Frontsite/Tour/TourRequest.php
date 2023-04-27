<?php

namespace App\Http\Requests\Frontsite\Tour;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
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
            'nama' => 'required',
            'detail' => 'required',
            'harga' => 'required',
            'jumlahorang' => 'required|integer',
            'diskon' => 'nullable',
            'hargatotal' => 'required|numeric',
            'jumlah_hari' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }
}
