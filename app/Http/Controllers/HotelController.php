<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\HotelImage;
use Illuminate\Http\Request;
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
        // dd($hotels);
        return view('User.hotel', ['hotels' => $hotels]);
     
    }
    public function showList()
    {
    $hotels = Hotel::paginate(3);
        // dd($hotels);
        return view('User.index', ['hotels' => $hotels]);
     
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
    //     public function storePhoto(Request $request, $id)
    // {
    //     $request->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     $imageName = time() . '.' . $request->image->extension();
    //     $request->image->move(public_path('images'), $imageName);

    //     $hotelImage = HotelImage::create([
    //         'hotel_id' => $id,
    //         'image_url' => '/images/' . $imageName,
    //     ]);

    //     return redirect()->route('hotels.show', $id)->with('success', 'Photo uploaded successfully.');
    // }

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
        // dd($request);
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
            // dd($hotel_image);
            $hotel_image->save();
        }
    
        return redirect('kelolahotel')->with('success', 'Hotel updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($hotels_id)
    {
        DB::table('hotels')->where('id', $hotels_id)
            ->delete();
        return redirect()->back()->with('succes','Hotel delete successfull');
    }
}
