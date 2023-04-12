<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $pakettours = Tour::all();
        return view('admin-side.page-admin.pakettour.index', compact('tours'));
    }

    public function create()
    {
        return view('paket-tour.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'detail' => 'required',
            'harga' => 'required|numeric',
            'jumlahorang' => 'required|integer',
            'diskon' => 'nullable|numeric',
            'hargatotal' => 'required|numeric',
            'jumlah_hari' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('public/tour');
            $image->move($destinationPath, $name);
            $validatedData['gambar'] = $name;
        }

        Tour::create($validatedData);

        return redirect()->route('pakettours.index')
            ->with('success', 'Paket Tour created successfully.');
    }

    public function show()
    {
        return view('User.paket-tour.show');
    }

    public function edit(Tour $pakettour)
    {
        return view('paket-tour.edit', compact('pakettour'));
    }

    public function update(Request $request, Tour $pakettour)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'detail' => 'required',
            'harga' => 'required|numeric',
            'jumlahorang' => 'required|integer',
            'diskon' => 'nullable|numeric',
            'hargatotal' => 'required|numeric',
            'jumlah_hari' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('public/tour');
            $image->move($destinationPath, $name);
            $validatedData['gambar'] = $name;
        }

        $pakettour->update($validatedData);

        return redirect()->route('paket-tour.index')
            ->with('success', 'Paket Tour updated successfully');
    }

    public function destroy(Tour $pakettour)
    {
        $pakettour->delete();

        return redirect()->route('paket-tour.index')
            ->with('success', 'Paket Tour deleted successfully');
    }
}
