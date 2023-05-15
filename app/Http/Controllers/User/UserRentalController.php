<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontsite\Rental\FindcarRequest;
use App\Http\Requests\Frontsite\Rental\RentalRequest;
use App\Http\Requests\Frontsite\Rental\UserRentalRequest;
use App\Models\Rental;
use Illuminate\Http\Request;
use App\Models\Transportations;


class UserRentalController extends Controller
{
    public function index()
    {
        $transportations = Transportations::all();
        return view('User.rental.rental', compact('transportations'));
    }

    public function show($id)
    {
        // dd($id);
        $transportation = Transportations::findOrFail($id);
        return view('User.rental.details', compact('transportation'));
    }




    public function findCar(FindcarRequest $request)
    {
        $name = $request->input('name');
        $type = $request->input('type');
        // Retrieve the transportation data based on the user's search criteria
        $transportations = Transportations::query();
        // dump($transportations);
        if ($name) {
            $transportations->where('name', 'like', '%' . $name . '%');
        }
        if ($type) {
            $transportations->where('type', $type);
        }
        $transportations = $transportations->get();
        // Pass the transportation data to the view to display the results
        return view('User/rental/rental', ['transportations' => $transportations]);
    }

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
