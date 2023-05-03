<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontsite\Rental\FindcarRequest;
use App\Http\Requests\Frontsite\Rental\RentalRequest;
use Illuminate\Http\Request;
use App\Models\Transportations;


class UserRentalController extends Controller
{
    public function index()
    {
        $transportations = Transportations::all();
        return view('User.rental.rental', compact('transportations'));
    }

    public function show()
    {
        $transportations = Transportations::all();
        return view('User/Rental/details', compact('transportations'));
    }

    public function findCar(FindcarRequest $request)
    {
        $name = $request->input('name');
        $type = $request->input('type');
        // Retrieve the transportation data based on the user's search criteria
        $transportations = Transportations::query();
        dump($transportations);
        if ($name) {
            $transportations->where('name', 'like', '%'.$name.'%');
        }
        if ($type) {
            $transportations->where('type', $type);
        }
        $transportations = $transportations->get();
        // Pass the transportation data to the view to display the results
        return view('User/rental/rental', ['transportations' => $transportations]);
    }
    

}
