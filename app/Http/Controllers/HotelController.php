<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Hotel;
use App\Models\HotelImage;
use App\Models\PemesananHotel;
use App\Models\Tour;
use App\Models\Tour_reviews;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::with('images')->paginate(15);
        return view('admin-side.page-admin.hotel.kelolahotel', compact('hotels'));
    }

    public function show()
    {
        $hotels = Hotel::paginate(6);
        return view('User.hotels.hotel', ['hotels' => $hotels]);
    }
    public function showList()
    {
        $ratings = Tour_reviews::all();
        $tours = Wisata::paginate(3);
        $hotels = Hotel::paginate(3);
        return view('User.index', ['hotels' => $hotels,'tours'=> $tours,'ratings'=>$ratings]);
    }
    public function details($id)
    {
        $hotels = Hotel::find($id);
        $hotelId = $hotels->id;
        $hotels = Hotel::findOrFail($id);
        $images = $hotels->images;
        return view('User.hotels.details', ['hotel' => $hotels, 'images' => $images, 'hotelId' => $hotelId]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $hotels = Hotel::all();
        return view('admin-side.page-admin.hotel.tambah-hotel', compact('hotels'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // dd($request);
        $this->validate(
            $request,
            [
                'nama_hotel' => 'required',
                'lokasi' => 'required',
                'description' => 'required',
                'image' => 'required|mimes:jpeg,jpg,png,gif',
                'harga' => 'required',
            ]
        );

        $hotel = Hotel::create([
            "nama_hotel" => $request->nama_hotel,
            "lokasi" => $request->lokasi,
            "description" => $request->description,
            "harga" => $request->harga
        ]);
        // dd($hotel);
        $image = $request->file('image');

        HotelImage::create([
            'hotel_id' => $hotel->id,
            'caption' => $image->getClientOriginalName(),
            'image_url' => $image->storeAs(
                'images',
                $image->getClientOriginalName(),
                'public'
            )
        ]);

        return redirect('kelolahotel');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function edit($hotel_id)
    {
        $hotel = Hotel::find($hotel_id);
        $update_hotels_id = $hotel->id;
        $level = DB::table('hotels')->get();
        return view('admin-side.page-admin.hotel.edit-hotel', compact('hotel', 'level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $hotel = Hotel::findOrFail($id);
        $hotel->nama_hotel = $request->input('nama_hotel');
        $hotel->lokasi = $request->input('lokasi');
        $hotel->description = $request->input('description');
        $hotel->harga = $request->input('harga');
        $hotel_image = HotelImage::where('hotel_id', $id)->first();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $hotel_image->caption = $image->getClientOriginalName();
            $hotel_image->image_url = $image->storeAs(
                'images',
                $image->getClientOriginalName(),
                'public'
            );
            $hotel_image->save();
        }
        return redirect('kelolahotel')->with('success', 'Hotel updated successfully');
    }

    public function delete($id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();
        return redirect()->back()->with('success', 'Hotel deleted successfully');
    }



    public function storePemesanan(Request $request)
    {  
        $hotelId = $request->input('hotel_id');
        $hotels = Hotel::findOrFail($hotelId);

        $pemesanan = new PemesananHotel(); // create a new instance of the PemesananHotel model
        $pemesanan->hotel_id = $hotelId;
        $pemesanan->night_count = $request->night_count;
        $pemesanan->check_in = $request->check_in;
        $pemesanan->check_out = $request->check_out;
        $pemesanan->nightly_rate = $hotels->harga;
        $pemesanan->total_cost = $pemesanan->nightly_rate * $pemesanan->night_count;
        $images = $hotels->images;
        $pemesanan->save();
        Session::flash('warning', 'Hotel has already been booked');
        return view('User.hotels.details', ['hotel' => $hotels, 'images' => $images, 'hotelId' => $hotelId, 'hotels' => $hotels]);
    }
    
}
