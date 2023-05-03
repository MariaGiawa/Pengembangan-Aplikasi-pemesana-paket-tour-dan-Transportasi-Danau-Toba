<?php

namespace App\Http\Controllers;

use App\Http\Requests\Frontsite\Rental\RentalRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transportations;


class AdminRentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportations = Transportations::all();
        return view('admin-side.page-admin.transportations.index', compact('transportations'));
    }
    // public function show()
    // {
    //     $restaurants = Restaurant::with('images')->paginate(10);
    //     return view('user.restaurants.restaurants', compact('restaurants'));
    // }

    // public function details($id)
    // {
    //     $restaurant = Restaurant::findOrFail($id);
    //     $images = $restaurant->images;
    //     return view('User.restaurants.detail', ['restaurant' => $restaurant,'images' => $images]);
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transportations = Transportations::all();
        return view('admin-side.page-admin.transportations.create', compact('transportations'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(RentalRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = uniqid() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('transportation');
            $image->move($destinationPath, $name);
            $validatedData['image'] = $name;
        } else {
            $validatedData['image'] = ''; // set a default value for the image field
        }

        Transportations::create($validatedData);
        return redirect('transportations')->with('success', 'Transportation create successfully');
    }


    public function edit($transportation_id)
    {
        $transportation = Transportations::find($transportation_id);
        $update_transportations_id = $transportation->id;
        $level = DB::table('transportations')->get();
        return view('admin-side.page-admin.transportations.edit', compact('transportation', 'level'));
    }

    public function update(RentalRequest $request, $id)
    {
        $transportation = Transportations::findOrFail($id);
        $validatedData = $request->validated();

        $transportation->name = $validatedData['name'];
        $transportation->type = $validatedData['type'];
        $transportation->price = $validatedData['price'];
        $transportation->duration = $validatedData['duration'];
        $transportation->route = $validatedData['route'];
        $transportation->location = $validatedData['location'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = uniqid() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('transportation');
            $image->move($destinationPath, $name);
            $transportation->image = $name;
        }

        $transportation->save();
        return redirect('transportations')->with('success', 'Transportation updated successfully');
    }


    public function destroy($transportations_id)
    {
        DB::table('transportations')->where('id', $transportations_id)
            ->delete();
        return redirect()->back()->with('success', 'Transportation delete successfull');
    }
}
