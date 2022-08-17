<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller{


    private $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $data = $this->category->all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = $this->category->find($id);
        return response()->json($data);
    }

    public function store(CategoryRequest $request)
    {
  

        $data = $this->category->create($request->all());
        return response()->json($data);
    }

    public function update(CategoryRequest $request, $id)
    {

        $data = $this->category->find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = $this->category->find($id);
        $data->delete();

        return response()->json('',201);
    }

}
