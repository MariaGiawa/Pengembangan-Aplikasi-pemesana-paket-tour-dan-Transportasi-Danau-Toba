<?php

namespace App\Http\Controllers;

use App\Http\Requests\Frontsite\Restaurant\RestaurantReviewRequest;
use App\Models\Restaurant;
use App\Models\Restaurant_Reviews;
use Illuminate\Http\Request;

class RestaurantReviewController extends Controller
{
    public function index()
    {
        $ratings = Restaurant_Reviews::all();
        $restaurants = Restaurant::all();
        $totalRatings = count($ratings);
        $sumRatings = 0;

        foreach ($ratings as $rating) {
            $sumRatings += $rating->rating;
        }
        $averageRating = $totalRatings > 0 ? $sumRatings / $totalRatings : 0;

        return view('User.restaurants.detail', [
            'restaurants' => $restaurants,
            'ratings' => $ratings,
            'averageRating' => $averageRating
        ]);
    }


    public function store(RestaurantReviewRequest $request)
    {
        // dd($request);
        $validatedData = $request->validated();
        $restaurant_id = $request->input('restaurant_id');

        $restaurant = Restaurant::findOrFail($restaurant_id);

        $rating = new Restaurant_Reviews();
        $rating->restaurant_id = $restaurant_id;
        $rating->user_id = auth()->id();
        $rating->username = auth()->user()->name;
        $rating->rating = $validatedData['rating'];
        $rating->review = $validatedData['review'];
        // dd($rating);
        $rating->save();

        return redirect()->back()->with('success', 'Rating submitted successfully.');
    }
}
