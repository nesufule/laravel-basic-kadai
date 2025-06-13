<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Product;

class CookieController extends Controller
{
    public function index() {
        $product_id = Cookie::get('product_id');

        $product = product::find($product_id);

        return view('cookies.index', compact('product'));
    }

    public function create() {
        $products = Product::all();

        return view('cookies.create', compact('products'));
    }

    public function store(Request $request) {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        Cookie::queue('product_id', $request->input('product_id'), 60);

        return redirect('/cookies');
    }

    public function destory() {
        Cookie::queue(Cookie::forget('product_id'));

        return redirect('/cookies');
    }
}
