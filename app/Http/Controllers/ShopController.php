<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Sports;

class ShopController extends Controller
{

    public function index()
    {
        $sports = Sports::all();
        $categories = Category::all();

        if(request()->category and request()->sports){
            $products = Product::with('category', 'sports')->whereHas('category', function ($query) {
                $query->where('slug', request()->category);
            })->whereHas('sports', function ($query) {
                $query->where('slug', request()->sports);
            })->get();
        }
        elseif (request()->category){
            $products = Product::with('category')->whereHas('category', function ($query) {
                $query->where('slug', request()->category);
            })->get();
        }
        elseif (request()->sports){
            $products = Product::with('sports')->whereHas('sports', function ($query) {
                $query->where('slug', request()->sports);
            })->get();
        }

        else{
            $products = Product::all();
        }



        return view('shop')->with([
            'products' => $products,
            'sports' => $sports,
            'categories' => $categories,
        ]);
    }

   /**
     *
     *@param string $slug
     *@return illuminate\Http\Response
     *
     *
     */


    public function show($slug){
        $product = Product::where('slug', $slug)->firstOrFail();
        $category = Category::all()->where('slug', $slug)->first();

        return view('product')->with([
            'product' => $product,
            'category' => $category,


    ]);
    }

}
