<?php

namespace App\Http\Controllers;

use App\Http\Requests\Frontsite\Rental\UserRentalRequest;
use App\Models\Rental;
use App\Models\Transportations;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function store(UserRentalRequest $request)
    {
        $validatedData = $request->validated();
        $rental = new Rental();
        $rental->pickinglocation = $validatedData['pickinglocation'];
        $rental->pickingoff = $validatedData['pickingoff'];
        $rental->pickingupdate = $validatedData['pickingupdate'];
        $rental->pickinguphour = $validatedData['pickinguphour'];
        $rental->pickingoffdate = $validatedData['pickingoffdate'];
        $rental->pickingoffhour = $validatedData['pickingoffhour'];
        $rental->transportation_id = $validatedData['transportation_id'];
        $rental->status = 'pending';
        $rental->save();

        return redirect()->back()->with('success', 'Mobil berhasil diRental');

    }
}
