<?php

namespace App\Http\Controllers;

use App\Models\Fabricantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FabricantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fabricantes = DB::table('fabricantes')->get();
        return view('fabricantes.tableFabricante', ['fabricantes' =>$fabricantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fabricantes.FormFabricante');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fabricante = Fabricantes::create($request->all());
        $cadena = "Fabricante registrado con exito, con el ID:" . $fabricante->idfabricante;
        $fabricantes = DB::table('fabricantes')->get();
        return view('fabricantes.tableFabricante', ['fabricantes' =>$fabricantes],compact('cadena'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idfabricante)
    {
        $fabricante = DB::table('fabricantes')->where('idfabricante',$idfabricante)->first();
        return view('fabricantes.detalleFabricante',compact('fabricante'));
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
