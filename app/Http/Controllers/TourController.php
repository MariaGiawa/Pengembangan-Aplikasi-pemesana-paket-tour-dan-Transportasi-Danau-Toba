<?php

namespace App\Http\Controllers;

use App\Http\Requests\Frontsite\Tour\TourRequest;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
{
    public function index()
    {
        $pakettours = Tour::all();
        return view('admin-side.page-admin.pakettour.index', compact('pakettours'));
    }
    
    public function create()
    {
        return view('admin-side.page-admin.pakettour.create');
    }
    
    public function show()
    {
        $pakettours = Tour::all();
        return view('User.paket-tour.show', compact('pakettours'));
    }

    public function edit(Tour $paket_tour)
    {
        $level = DB::table('tours')->get();
        return view('admin-side.page-admin.pakettour.edit', compact('paket_tour', 'level'));
    }
    public function details($id)
    {
        dd($id);
        $pakettour = Tour::find($id);
        $tourId = $pakettour->id;
        $pakettour = Tour::findOrFail($id);
        $images = $pakettour->images;
        return view('User.paket-tour.booking', ['pakettour' => $pakettour, 'images' => $images, 'tourId' => $tourId]);
    }

    public function store(TourRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('public/tour');
            $image->move($destinationPath, $name);
            $validatedData['image'] = $name;
        }else {
            $validatedData['image'] = ''; // set a default value for the image field
        }
        Tour::create($validatedData);

        return redirect()->route('paket-tour.index')->with('success', 'Paket Tour created successfully.');
    }

    public function update(TourRequest $request, $id)
    {
        $pakettour = Tour::findOrFail($id);
        $pakettour->nama = $request->input('nama');
        $pakettour->diskon = $request->input('diskon');
        $pakettour->harga = $request->input('harga');
        $pakettour->hargatotal = $request->input('hargatotal');
        $pakettour->jumlah_hari = $request->input('jumlah_hari');
        $pakettour->jumlahorang = $request->input('jumlahorang');
        $pakettour->detail = $request->input('detail');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('public/tour');
            $image->move($destinationPath, $name);
            $validatedData['image'] = $name;
            $pakettour->image = $name; // assign the new image name to the booking's image field
            // dd($image);
        }
        $pakettour->save();
        // dd($pakettour);
        return redirect()->route('paket-tour.index')->with('success', 'Paket Tour updated successfully');
    }
    

    public function destroy($id)
    {
        $pakettour = Tour::findOrFail($id);
        $pakettour->delete();
        return redirect()->route('paket-tour.index')
            ->with('success', 'Paket Tour deleted successfully');
    }
}
