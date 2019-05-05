<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Sports;

class LandingPageController extends Controller
{


    public function index(){

        $categories = Category::all();
        $sports = Sports::all();

        return view('landing-page')->with([
            'categories' => $categories,
            'sports' => $sports


        ]);
    }
}
