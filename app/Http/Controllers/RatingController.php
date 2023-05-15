<?php

namespace App\Http\Controllers;

use App\Http\Requests\Frontsite\Rating\RatingRequest;
use App\Models\Tour_reviews;
use App\Models\Wisata;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    // public function index($id)
    // {
    //     $ratings = Tour_reviews::all();
    //     $wisatas = Wisata::all();

    //     $totalRatings = count($ratings);
    //     $sumRatings = 0;

    //     foreach ($ratings as $rating) {
    //         $sumRatings += $rating->rating;
    //     }
    //     $averageRating = $totalRatings > 0 ? $sumRatings / $totalRatings : 0;

    //     return view('User.rating.details', ['wisatas' => $wisatas, 'ratings' => $ratings, 'averageRating' => $averageRating]);
    // }

    // public function show($id)
    // {
    //     $wisata = Wisata::findOrFail($id);
    //     $ratings = Tour_reviews::where('wisata_id', $id)->get();
    //     $totalRatings = count($ratings);
    //     $sumRatings = 0;
    //     $averageRating = 0;

    //     if ($totalRatings > 0) {
    //         foreach ($ratings as $rating) {
    //             $sumRatings += $rating->rating;
    //         }
    //         $averageRating = $sumRatings / $totalRatings;
    //     }

    //     return view('User.rating.details', compact('wisata', 'ratings', 'averageRating', 'totalRatings'));
    // }

    public function show($id)
    {
        $wisatas = Wisata::findOrFail($id);
        $ratings = Tour_reviews::where('wisata_id', $wisatas->id)->get();
        $tours = Wisata::all();

        $totalRatings = count($ratings);
        $averageRating = $totalRatings > 0 ? $ratings->sum('rating') / $totalRatings : 0;
        $averageRating = round($averageRating, 1);

        return view('User.rating.details', compact('wisatas', 'ratings', 'averageRating', 'tours'));
    }





    public function store(RatingRequest $request)
    {
        // dd($request);
        $validatedData = $request->validated();
        $wisata_id = $request->input('wisata_id');

        $tour = Wisata::findOrFail($wisata_id);

        $rating = new Tour_reviews();
        $rating->wisata_id = $wisata_id;
        $rating->user_id = auth()->id();
        $rating->username = auth()->user()->name;
        $rating->rating = $validatedData['rating'];
        $rating->review = $validatedData['review'];
        // dd($rating);
        $rating->save();

        return redirect()->back()->with('success', 'Rating submitted successfully.');
    }
}
