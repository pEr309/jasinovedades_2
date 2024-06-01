<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Http\Responses\ApiResponse;
use App\Models\Product;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $products = new ProductCollection(Product::all());
            return ApiResponse::success('Listado de usuarios',200,$products);
        }catch (Exception $e){
            return ApiResponse::error('Error en la consulta',404);
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
    public function show($id)
    {
        try{
            $product = new ProductCollection(Product::query()->where('id',$id)->get());
            if ($product->isEmpty())throw new ModelNotFoundException("Producto no encontrado");
            return ApiResponse::success("Información del producto",200,$product);
        }catch (ModelNotFoundException $e){
         return ApiResponse::error('No se encuentra el producto',404);

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
