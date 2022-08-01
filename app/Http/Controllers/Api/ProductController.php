<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get()
    {
        $product = Products::get();
        return response()->json([
            "data" => $product,
        ]);
    }
    public function post(Request $request)
    {
        $product = new Products();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return response()->json("Data berhasil di tambahkan");
    }
    public function show($id)
    {
        $product = Products::find($id);
        return response()->json([
            $product
        ]);
    }
    public function edit(Request $request, $id)
    {
        $product = Products::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return response()->json("Data berhasil di update");
    }
}
