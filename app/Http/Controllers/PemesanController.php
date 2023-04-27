<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\PemesananHotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PemesanController extends Controller
{


    public function index()
    {
        $pemesanan_hotels = PemesananHotel::all();
        $hotels = Hotel::all();
        return view('admin-side.page-admin.hotel.order-hotel', ['pemesanan_hotels' => $pemesanan_hotels, 'hotels' => $hotels]);
    }


    public function show()
    {
        $hotels = Hotel::all();
        $acceptedStatus = 'accepted';
        return view('your-view', compact('hotels', 'acceptedStatus'));
    }

    public function edit($pemesanan)
    {
        $pemesananData = PemesananHotel::findOrFail($pemesanan);
        return view('admin-side.page-admin.hotel.edit-order', ['pemesanan' => $pemesananData]);
    }


    public function update(Request $request, $pemesanan)
    {
        $request->validate([
            'status' => 'required|in:accepted,rejected',
        ]);
        $pemesanan = PemesananHotel::findOrFail($pemesanan);
        $pemesanan->status = $request->input('status');
        $pemesanan->save();

        return redirect()->route('pemesananhotel')->with('success', "Berhasil mengubah status pemesanan!");
    }


    public function destroy($id)
    {
        $pemesanan_hotel = PemesananHotel::findOrFail($id);
        $pemesanan_hotel->delete();

        return redirect()->back()->with('success', 'Hotel deleted successfully.');
    }
}
