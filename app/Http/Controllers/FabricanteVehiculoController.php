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
    public function update(Request $request, $idFabricante, $idVehiculo)
    {
        $metodo=$request->method();
        $fabricante=Fabricante::find($idFabricante);
        if(!$fabricante){
            return response()->json(
                [
                    'mensaje'=>'No se encuentra al fabricante',
                    'codigo'=>'404'
                ], 
                404
            );
        }
        $vehiculo=$fabricante->vehiculos()->find($idVehiculo);
        if(!$vehiculo){
            return response()->json(
                [
                    'mensaje'=>'No se encuentra al fabricante',
                    'codigo'=>'404'
                ], 
                404
            );
        }
        $color=$request->has('color');
        $potencia=$request->has('potencia');
        $cilindraje=$request->has('cilindraje');
        $peso=$request->has('peso');
        $flag=false;
        if ($metodo==="PATCH") {
            if ($color!=null && $color!='') {
                $vehiculo->color=$color;
                $flag=true;
            }
            if ($potencia!=null && $potencia!='') {
                $vehiculo->potencia=$potencia;
                $flag=true;
            }
            if ($cilindraje!=null && $cilindraje!='') {
                $vehiculo->cilindraje=$cilindraje;
                $flag=true;
            }
            if ($peso!=null && $peso!='') {
                $vehiculo->peso=$peso;
                $flag=true;
            }
            if ($flag) {
                $vehiculo->save();
            }
            return response()->json(
                [
                    'mensaje'=>'El vehiculo ha sido editado',
                    'codigo'=>'202'
                ], 
                202
            );
        }
        if (!$color || !$potencia || !$cilindraje || !$peso) {
            return response()->json(
                [
                    'mensaje'=>'Datos inválidos'
                ], 
                404
            );
        }
        $vehiculo->color=$color;
        $vehiculo->potencia=$potencia;
        $vehiculo->cilindraje=$cilindraje;
        $vehiculo->peso=$peso;
        $vehiculo->save();
        return response()->json(
            [
                'mensaje'=>'El vehiculo ha sido editado',
                'codigo'=>'202'
            ], 
            202
        );
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
