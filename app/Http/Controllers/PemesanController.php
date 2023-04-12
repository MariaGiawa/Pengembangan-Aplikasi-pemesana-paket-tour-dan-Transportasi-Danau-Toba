<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\PemesananHotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesanController extends Controller
{

    
    public function index()
{
    $pemesanan_hotels = PemesananHotel::all();
    $hotels = Hotel::all();
    return view('admin-side.page-admin.hotel.order-hotel', ['pemesanan_hotels' => $pemesanan_hotels,'hotels'=>$hotels]);
}


    public function show()
{
    $hotels = Hotel::all();
    $acceptedStatus = 'accepted';
    return view('your-view', compact('hotels', 'acceptedStatus'));
}

public function accept(Request $request, $id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->status = 'accepted';
        $hotel->save();

        return redirect()->back()->with('success', 'Hotel status updated to accepted.');
    }

    /**
     * Remove the specified hotel from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();

        return redirect()->back()->with('success', 'Hotel deleted successfully.');
    }
}
