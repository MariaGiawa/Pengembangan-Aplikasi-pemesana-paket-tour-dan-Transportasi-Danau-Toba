<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\RestaurantImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::with('images')->paginate(15);
        return view('admin-side.page-admin.restaurant.kelola-restaurant', compact('restaurants'));
    }
    public function show()
    {
        $restaurants = Restaurant::with('images')->paginate(10);
        return view('user.restaurants.restaurants', compact('restaurants'));
    }

    public function details($id)
    {
        // dd($id);
        $restaurant = Restaurant::findOrFail($id);
        $images = $restaurant->images;
        // dd($restaurant);
        return view('User.restaurants.detail', ['restaurant' => $restaurant,'images' => $images]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $restaurants = Restaurant::all();

        return view('admin-side.page-admin.restaurant.tambah-restaurant', compact('restaurants'));
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
                'nama_restaurant' => 'required',
                'lokasi' => 'required',
                'description' => 'required',
                'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'harga' => 'required',

            ]
        );

        $restaurant = Restaurant::create([
            "nama_restaurant" => $request->nama_restaurant,
            "lokasi" => $request->lokasi,
            "description" => $request->description,
            "harga" => $request->harga
        ]);
        // dd($restaurant);
        $image = $request->file('images');
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = $image->getClientOriginalName();
                $image->storeAs('public/restaurant', $imageName);
                RestaurantImage::create([
                    'restaurant_id' => $restaurant->id,
                    'images' => $imageName
                ]);
            }
        }
        // dd($restaurant);
        return redirect('kelola-restaurant');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($restaurant_id)
    {
        $restaurant = Restaurant::find($restaurant_id);
        $update_restaurants_id = $restaurant->id;
        $level = DB::table('restaurants')->get();
        return view('admin-side.page-admin.restaurant.edit-restaurant', compact('restaurant', 'level'));
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
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->nama_restaurant = $request->input('nama_restaurant');
        $restaurant->lokasi = $request->input('lokasi');
        $restaurant->description = $request->input('description');
        $restaurant->harga = $request->input('harga');

        $deletedImages = $request->input('deleted_images');
        if ($deletedImages) {
            RestaurantImage::whereIn('id', $deletedImages)->delete();
        }

        $images = $request->file('images');
        if ($images) {
            foreach ($images as $image) {
                $imageName = $image->getClientOriginalName();
                $image->storeAs('public/restaurant', $imageName);

                RestaurantImage::create([
                    'restaurant_id' => $id,
                    'images' => $imageName
                ]);
            }
        }
        return redirect('kelola-restaurant')->with('success', 'restaurant updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($restaurants_id)
    {
        DB::table('restaurants')->where('id', $restaurants_id)
            ->delete();
        return redirect()->back()->with('succes', 'restaurant delete successfull');
    }
}
