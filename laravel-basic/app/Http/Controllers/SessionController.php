<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SessionController extends Controller
{
    public function index() {
        $product_id = session('product_id');

        $product = Product::find($product_id);

        return view('sessions.index', compact('product'));
    }

    public function create() {
        $products = Product::all();

        return view('sessions.create', compact('products'));
    }

    public function store(Request $request) {
        $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);

        session(['product_id' => $request->input('product_id')]);

        return redirect('/sessions');
    }

    public function destory() {
        session()->forget('product_id');

        return redirect('/sessions');
    }
}
