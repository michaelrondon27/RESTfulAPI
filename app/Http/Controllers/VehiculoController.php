<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo;

class VehiculoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(
            [
                'datos'=>Vehiculo::all()
            ], 
            202
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculo=Vehiculo::find($id);
        if (!$vehiculo) {
            return response()->json(
                [
                    'mensaje'=>'No se encuentra al vehiculo', 
                    'codigo'=>404
                ],
                404
            );
        }
        return response()->json(
            [
                'datos'=>$vehiculo
            ],
            202
        );
    }
    
}
