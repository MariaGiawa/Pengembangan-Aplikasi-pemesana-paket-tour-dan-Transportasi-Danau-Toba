<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tour;
use App\Http\Requests\Frontsite\Hotel\BookingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\Bool_;

class BookingController extends Controller
{
    public function show($id)
    {
        $pakettours = Tour::findOrFail($id);
        $tourId = $pakettours->id;
        $images = $pakettours->images;
        return view('User.paket-tour.booking', ['pakettours' => $pakettours, 'images' => $images, 'tourId' => $tourId]);
    }

    public function index()
    {
        $bookings = Booking::all();
        return view('admin-side.page-admin.booking.index', compact('bookings'));
    }

    public function edit(Booking $booking)
    {
        $level = DB::table('bookings')->get();
        return view('admin-side.page-admin.booking.edit', compact('booking', 'level'));
    }

    public function store(Request $request)
    {
        // return('hello');
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
            'tanggal' => 'required|date',
            'tour_id' => 'required|exists:tours,id'
        ]);

        $booking = new Booking;
        $booking->nama = $validatedData['nama'];
        $booking->email = $validatedData['email'];
        $booking->telepon = $validatedData['telepon'];
        $booking->tanggal = $validatedData['tanggal'];
        $booking->tour_id = $validatedData['tour_id'];
        $booking->status = 'pending';
        $booking->save();

        return redirect()->back()->with('success', 'Booking berhasil ditambahkan');
    }




    public function update(Request $request, $booking)
    {
        // dump($request);
        $request->validate([
            'status' => 'required|in:accepted,rejected',
        ]);

        $booking = Booking::findOrFail($booking);
        $booking->status = $request->input('status');
        $booking->save();

        return redirect()->route('booking.index')->with('success', "Berhasil mengubah status pemesanan!");
    }



    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('booking.index')
            ->with('success', 'booking deleted successfully');
    }
}
