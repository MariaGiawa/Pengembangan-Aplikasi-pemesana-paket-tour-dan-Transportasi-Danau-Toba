<?php
namespace App\Http\Controllers;

use App\Models\transport_image;
use App\Models\Transportations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransportationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Transportations = Transportations::with('images')->paginate(15);
        return view('admin-side.page-admin.Transportation.index', compact('Transportations'));
    }
    public function show()
    {
        $Transportations = Transportations::with('images')->paginate(10);
        return view('user.restaurants.restaurants', compact('Transportations'));
    }

    public function details($id)
    {
        // dd($id);
        $Transportation = Transportations::findOrFail($id);
        $images = $Transportation->images;
        // dd($restaurant);
        return view('User.restaurants.detail', ['restaurant' => $Transportation,'images' => $images]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $Transportations = Transportations::all();

        return view('admin-side.page-admin.Transportation.tambah-restaurant', compact('restaurants'));
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
                'name' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'type' => 'required',
                'price' => 'required|numeric',
                'duration' => 'required|numeric',
                'route' => 'required',
                'location' => 'required',

            ]
        );
        $transportation = new Transportations();
        $transportation->nama_produk = $request->nama_produk;
        $transportation->id_levelproduk = $request->nama_jenis_produk;
        $transportation->stock = $request->stock;
        $transportation->harga = $request->harga;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/MakananMinuman', $file);
            $transportation->file_foto = $file;
        }
    
        // dd($restaurant);
        $image = $request->file('images');
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = $image->getClientOriginalName();
                $image->storeAs('public/Transportation', $imageName);
                transport_image::create([
                    'restaurant_id' => $transportation->id,
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
    public function edit($Transportation_id)
    {
        $Transportations = Transportations::find($Transportation_id);
        $update_Transportation_id = $Transportations->id;
        $level = DB::table('restaurants')->get();
        return view('admin-side.page-admin.Transportation.edit-restaurant', compact('restaurant', 'level'));
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
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($restaurants_id)
    {
        DB::table('Transportations')->where('id', $restaurants_id)
            ->delete();
        return redirect()->back()->with('succes', 'restaurant delete successfull');
    }
}
?>