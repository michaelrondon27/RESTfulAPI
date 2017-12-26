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
        //
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
