<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create(Request $request)
    {
        $query = $request->query("query");
        if($query !="")
            return redirect("/restaurants?query=$query");

        $promos = DB::table('promo')
        ->join('restaurant', 'restaurant.restaurantId', '=', 'promo.restaurantId')
        ->join('user', 'user.userId', '=', 'restaurant.userId')
        ->get();

        return view('home')
        ->with ('title', 'Home')
        ->with('promos', $promos);
    }
}
