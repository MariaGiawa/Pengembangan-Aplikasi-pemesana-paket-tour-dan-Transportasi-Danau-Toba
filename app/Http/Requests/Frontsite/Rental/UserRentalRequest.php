<?php

namespace App\Http\Requests\Frontsite\Rental;

use Illuminate\Foundation\Http\FormRequest;

class UserRentalRequest extends FormRequest
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
            'pickinglocation' => 'required|string',
            'pickingoff' => 'required|string',
            'pickingupdate' => 'required|date|after_or_equal:today',
            'pickinguphour' => 'required|date_format:H:i',
            'pickingoffdate' => 'required|date|after:pickingupdate',
            'pickingoffhour' => 'required|date_format:H:i',
            'transportation_id' => 'required',
            'status'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'pickinglocation.required' => 'Kolom lokasi pengambilan wajib diisi.',
            'pickingoff.required' => 'Kolom lokasi pengembalian wajib diisi.',
            'pickingupdate.required' => 'Kolom tanggal pengambilan wajib diisi.',
            'pickingupdate.after_or_equal' => 'Tanggal pengambilan harus hari ini atau nanti.',
            'pickinguphour.required' => 'Kolom jam pengambilan wajib diisi.',
            'pickinguphour.date_format' => 'Kolom jam pengambilan harus dalam format H:i.',
            'pickingoffdate.required' => 'Kolom tanggal pengambilan wajib diisi.',
            'pickingoffdate.after' => 'Tanggal pengembalian harus setelah tanggal pengambilan.',
            'pickingoffhour.required' => 'Kolom jam pengambilan wajib diisi.',
            'pickingoffhour.date_format' => 'Kolom jam pengambilan harus dalam format H:i.'
        ];
    }
}
