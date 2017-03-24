<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Food;
use App\Http\Requests\FoodRequest;
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
    public function store(FoodRequest $request)
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

    public function search(Request $request)
    {
        $keyword = '';
        $foods = [];

        if ($request->isMethod('post'))
        {
            $keyword = $request->input('search_text');
            $foods = Food::search($keyword);
        }

        return view('Food.search', ['search_text'=>$keyword, 'matchings'=> $foods]);
    }

    public function retrieve($id) {
        return Food::find($id);
    }
}
