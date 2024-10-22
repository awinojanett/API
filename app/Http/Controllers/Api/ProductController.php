<?php

namespace App\Http\Controllers\Api;

use App\Models\Products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::get();
        if ($products)
        {
            return ProductResource::collect($products);
        }
        else
        {
            return response()->json(['message' =>'No record available'],200);
        }
    }

    public function store(Request $request)
    {
        $products = Products::create($request->all());
    }

    public function show($id)
    {
        $products = Products::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $products = Products::findOrFail($id);
    }

    public function destroy($id)
    {
        $products = Products::findOrFail($id);
    }
}
