<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fabricante;

class FabricanteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth.basic', ['only'=>['store', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(
            [
                'datos'=>Fabricante::all()
            ], 
            202
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$request->has(['nombre', 'telefono'])){
            return response()->json(
                [
                    'mensaje'=>'Datos inválidos o incompletos',
                    'codigo'=>'422'
                ], 
                422
            );
        }
        $fabricante=new Fabricante($request->all());
        $fabricante->save();
        return response()->json(
            [
                'mensaje'=>'El fabricante ha sido creado'
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
        $fabricante=Fabricante::find($id);
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
                'datos'=>$fabricante
            ],
            202
        );
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
        $metodo=$request->method();
        $fabricante=Fabricante::find($id);
        $flag=false;
        if ($metodo==="PATCH") {
            $nombre=$request->has('nombre');
            if ($nombre!=null && $nombre!='') {
                $fabricante->nombre=$nombre;
                $flag=true;
            }
            $telefono=$request->has('telefono');
            if ($telefono!=null && $telefono!='') {
                $fabricante->telefono=$telefono;
                $flag=true;
            }
            if ($flag) {
                $fabricante->save();
            }
            return response()->json(
                [
                    'mensaje'=>'El fabricante ha sido editado',
                    'codigo'=>'202'
                ], 
                202
            );
        }
        $nombre=$request->has('nombre');
        $telefono=$request->has('telefono');
        if (!$nombre || !$telefono) {
            return response()->json(
                [
                    'mensaje'=>'Datos inválidos'
                ], 
                404
            );
        }
        $fabricante->nombre=$nombre;
        $fabricante->telefono=$telefono;
        $fabricante->save();
        return response()->json(
            [
                'mensaje'=>'El fabricante ha sido editado',
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
