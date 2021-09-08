<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class ProductController extends Controller
{
    public function products() {
        $trips = Trip::paginate(12);
        return view('products', compact('trips'));
    }

}
