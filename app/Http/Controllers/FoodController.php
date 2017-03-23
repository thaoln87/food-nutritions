<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * View for creating food
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Food.create');
    }

    /**
     * Store food information
     * @param Request $request
     * @return int
     */
    public function store(Request $request)
    {
        $brandName = $request->get('brand');
        $brandId = null;
        if($brandName != null) {
            $brandId = Brand::getOrCreate($brandName)->id;
        }

        $food = new Food($request->all());

        if($brandId != null) {
            $food->brand_id = $brandId;
        }

        $food->save();

        return "OK";
    }



}
