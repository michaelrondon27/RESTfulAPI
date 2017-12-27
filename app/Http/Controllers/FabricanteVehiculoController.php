<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fabricante;

class FabricanteVehiculoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $fabricante=Fabricante::find($id);
        $vehiculos=$fabricante->vehiculos;
        if (!$fabricante) {
            return response()->json(
                [
                    'mensaje'=>'No se encuentra al fabricante',
                    'codigo'=>404
                ],
                404
            );
        }
        return response()->json(
            [
                'datos'=>$vehiculos
            ],
            202
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        if(!$request->has(['color', 'cilindraje', 'peso', 'potencia'])){
            return response()->json(
                [
                    'mensaje'=>'Datos inválidos o incompletos',
                    'codigo'=>'422'
                ], 
                422
            );
        }
        $fabricante=Fabricante::find($request->has($id));
        if(!$fabricante){
            return response()->json(
                [
                    'mensaje'=>'Fabricante no esxiste',
                    'codigo'=>'404'
                ], 
                404
            );
        }
        $vehiculo=new Vehiculo($request->all());
        $vehiculo->fabricante_id=$id;
        $vehiculo=save();
        return response()->json(
                [
                    'mensaje'=>'El vehiculo se ha registrado',
                    'codigo'=>'202'
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
