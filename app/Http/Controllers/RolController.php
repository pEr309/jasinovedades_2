<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Rol;
use Illuminate\Http\Request;
use App\Http\Responses\ApiResponse;
use App\Http\Resources\RolCollection;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $rols = new RolCollection(Rol::all());
        return ApiResponse::success('Listado de roles con usuarios',201, $rols);
        }catch (Exception $e){
            return ApiResponse::error('Error al listar los roles',500);

        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|min:3|max:45',
            ]);
            $rol = Rol::create($request->all());
            return ApiResponse::success("Se ha creado el rol correctamente", 200, $rol);
        }catch(ValidationException $e){
            return ApiResponse::error ($e->getMessage(), 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            //$rol = new RolCollection(Rol::findOrFail($id));
            //$rol = Rol::findOrFail($id);
            $rol = new RolCollection(Rol::query()->where('id',$id)->get());
            if ($rol->isEmpty())throw new ModelNotFoundException("Rol no encontrado");
            return ApiResponse::success('Información del rol',200,$rol);
        }catch(ModelNotFoundException $e){
            return ApiResponse::error('No existe el rol solicitado',404);

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rol $rol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rol $rol)
    {
        //
    }
}
