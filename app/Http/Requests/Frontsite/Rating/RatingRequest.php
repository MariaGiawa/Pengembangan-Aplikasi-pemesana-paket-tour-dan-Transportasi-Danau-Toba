<?php

namespace App\Http\Requests\Frontsite\Rating;

use Illuminate\Foundation\Http\FormRequest;

class RatingRequest extends FormRequest
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
        // dd('1');

        return [
            'rating' => 'required|in:1,2,3,4,5',
            'review' => 'nullable|string|max:255',
        ];

    }
}