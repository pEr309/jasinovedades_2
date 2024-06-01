<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryCollection;
use App\Http\Responses\ApiResponse;
use App\Models\Category;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $category = new CategoryCollection(Category::all());
            return ApiResponse::success('Listado de categorias');
        }catch (Exception $e){
            return ApiResponse::error('Error al listar las categorias');
        }
    }

    /** 
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        try{
            $category = Category::findOrFail($id);
        }catch (ModelNotFoundException $e){
            return ApiResponse::error('No se encontro la categoria');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
