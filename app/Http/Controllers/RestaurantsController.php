<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class RestaurantsController extends Controller
{
    public function create(Request $request)
    {
        $query = $request->query("query");
        $restaurants = null;

        if ($query != "") {
          $restaurants = DB::table("restaurant")
          ->join('user', 'user.userId', '=', 'restaurant.userId')
          ->where("name", "like", "%$query%")
          ->get();
        } else {
          $restaurants = DB::table("restaurant")
          ->join('user', 'user.userId', '=', 'restaurant.userId')
          ->get();
        }

        $restaurants_photos = [];

        foreach ($restaurants as $restaurant) {
            array_push(
                $restaurants_photos,
                base64_encode(
                    Storage::get("/restaurant/profile_pict/$restaurant->photo_url")
                )
            );
        }

        $promos = DB::table('promo')
            ->join('restaurant', 'restaurant.restaurantId', '=', 'promo.restaurantId')
            ->join('user', 'user.userId', '=', 'restaurant.userId')
            ->get();

        return view('restaurants')
            ->with('title', 'Restaurants')
            ->with('promos', $promos)
            ->with('restaurants', $restaurants)
            ->with('restaurants_photo', $restaurants_photos);

    }
}
