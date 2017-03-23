<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function create()
    {
        return view('Food.create');
    }

    public function store()
    {

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

}
