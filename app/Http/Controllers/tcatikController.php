<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\store;

class tcatikController extends Controller
{
    public function menu()
    {
        $stores = store::withCount('products')->get();
        $products = product::all();
        $categories = category::all();
        return view('menu')->with('products', $products)->with('categories', $categories)->with('stores', $stores);
    }
}
