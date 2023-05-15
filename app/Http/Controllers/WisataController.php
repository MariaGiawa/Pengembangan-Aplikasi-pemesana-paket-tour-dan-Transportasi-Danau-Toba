<?php

namespace App\Http\Controllers;

use App\Http\Requests\Frontsite\wisata\WisataRequest;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    public function index()
    {
        $tours = Wisata::all();
        return view('admin-side.page-admin.tour.index', compact('tours'));
    }

    public function create()
    {
        return view('admin-side.page-admin.tour.create');
    }

    public function show()
    {
        $tours = Wisata::all();
        return view('User.paket-tour.show', compact('tours'));
    }

    public function edit($id)
    {
        $tours = Wisata::findOrFail($id);
        $level = DB::table('tours')->get();
        return view('admin-side.page-admin.tour.edit', compact('tours', 'level'));
    }
    public function details($id)
    {
        // dd($id);
        $pakettour = Wisata::find($id);
        $tourId = $pakettour->id;
        $pakettour = Wisata::findOrFail($id);
        $images = $pakettour->images;
        return view('User.paket-tour.booking', ['pakettour' => $pakettour, 'images' => $images, 'tourId' => $tourId]);
    }

    public function store(WisataRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('public/tours');
            $image->move($destinationPath, $name);
            $validatedData['image'] = $name;
        } else {
            $validatedData['image'] = ''; // set a default value for the image field
        }
        Wisata::create($validatedData);

        return redirect()->route('tours.index')->with('success', 'Paket Tour created successfully.');
    }

    public function update(WisataRequest $request, $id)
    {
        // dd($request);
        $tour = Wisata::findOrFail($id);
        $tour->nama = $request->input('nama');
        $tour->detail = $request->input('detail');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('public/tours');
            $image->move($destinationPath, $name);
            $tour->image = $name; // assign the new image name to the booking's image field
        }
        // dd($tour);
        $tour->save();
        return redirect()->route('tours.index')->with('success', 'Paket Tour updated successfully');
    }



    public function destroy($id)
    {
        $tour = Wisata::findOrFail($id);
        $tour->delete();
        return redirect()->route('tours.index')
            ->with('success', 'Paket Tour deleted successfully');
    }
}
