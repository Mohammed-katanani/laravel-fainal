<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    // private static function getData() // mock data
    // {
    //     return [
    //         ["id" => "1", "name" => "LG", "origin" => "Koria"],
    //         ["id" => "2", "name" => "ASUS", "origin" => "Chaina"],
    //         ["id" => "3", "name" => "HP", "origin" => "Koria"],
    //     ];
    // }
    public function index()
    {
        return view('products.index', ["Products" => Product::all()]);
    }

    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $Product = new Product();
        $Product->name = $request->input('name');
        $Product->price = $request->input('price');
        $Product->origin = $request->input('origin');
        $Product->save();
        return redirect()->route('products.index');
    }
    public function show($id)
    {
        return view('products.show', [
            'Product' => Product::findOrFail($id)
        ]);
    }

}
