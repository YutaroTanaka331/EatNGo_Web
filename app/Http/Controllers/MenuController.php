<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function create(string $id)
    {
        $menu = DB::table('menu')
            ->where('restaurantId', '=', $id)
            ->get();

        $restaurant_menu = [];
        $category_menu = DB::table("menu")->where("restaurantId", "=", $id)
            ->distinct()
            ->get(['itemCategoryId']);
        foreach ($category_menu as $category) {
            $menu = DB::table("menu")->where("restaurantId", "=", $id)->where("itemCategoryId", "=", $category->itemCategoryId)
                ->get();
            array_push($restaurant_menu, (object)array(
                'category' => $category->itemCategoryId,
                'data' => $menu
            ));
        }

        $promos = DB::table('promo')
            ->join('restaurant', 'restaurant.restaurantId', '=', 'promo.restaurantId')
            ->join('user', 'user.userId', '=', 'restaurant.userId')
            ->get();

        return view('menu')
            ->with('title', 'Menu')
            ->with('promos', $promos)
            ->with('category', $category)
            ->with('restaurant_menu', $restaurant_menu);
    }
}
