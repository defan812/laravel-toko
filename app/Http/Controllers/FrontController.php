<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
use App\Liga;
use App\Product;

class FrontController extends Controller
{
    public function index()
    {
        return view('front', [
            "tittle" => "Home",
            "products" => Product::take(4)->get(),
            "all_products" => Product::all(),
            "ligas"    => Liga::all()
        ]);

    }
}
