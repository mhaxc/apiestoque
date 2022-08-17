<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    private $products;
    public function __construct(Product $products)
    {
        $this->products = $products;
    }

    public function index()
    {
        $data = Product::all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = Product::find($id);
        return response()->json($data);
    }

    public function store(ProductRequest $request)
    {

        $data = Product::create($request->all());
        return response()->json($data);
    }

    public function update(ProductRequest $request, $id)
    {

        $data = Product::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = Product::find($id);
        $data->delete();

        return response()->json('', 201);
    }
}
