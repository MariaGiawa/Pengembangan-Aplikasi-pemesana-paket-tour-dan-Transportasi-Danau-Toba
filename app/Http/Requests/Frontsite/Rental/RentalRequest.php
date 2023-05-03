<?php

namespace App\Http\Requests\Frontsite\Rental;

use Illuminate\Foundation\Http\FormRequest;

class RentalRequest extends FormRequest
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
            'name' => 'required|string',
            'image' => 'required|image|max:1024',
            'type' => 'required|string',
            'price' => 'required|numeric|min:0|max:100000',
            'duration' => 'required',
            'route' => 'required|string',
            'location' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please enter a name.',
            'name.string' => 'The name must be a string.',
            'image.required' => 'Please upload an image.',
            'image.image' => 'The uploaded file must be an image.',
            'image.max' => 'The image must be smaller than 1024 KB.',
            'type.required' => 'Please select a type.',
            'type.string' => 'The type must be a string.',
            'type.in' => 'The selected type is invalid.',
            'price.required' => 'Please enter a price.',
            'price.numeric' => 'The price must be a number.',
            'price.min' => 'The price must be at least :min.',
            'price.max' => 'The price cannot be greater than :max.',
            'duration.required' => 'Please enter a duration.',
            'duration.numeric' => 'The duration must be a number.',
            'duration.min' => 'The duration must be at least :min.',
            'duration.max' => 'The duration cannot be greater than :max.',
            'route.required' => 'Please enter a route.',
            'route.string' => 'The route must be a string.',
            'location.required' => 'Please enter a location.',
            'location.string' => 'The location must be a string.',
        ];
    }
}
