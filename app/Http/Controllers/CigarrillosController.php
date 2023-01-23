<?php

namespace App\Http\Controllers;

use App\Models\Cigarrillo;
use App\Models\Fabricantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CigarrillosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cigarrillos = DB::table('cigarrillos')->get();
        
        return view('cigarrillos.tableCigarrillos',['cigarrillos'=>$cigarrillos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $estrellas = DB::table('estrellas')->get();
        return view('peliculas.FormPeliculas',['estrellas' => $estrellas]);

        $fabricantes = DB::table('fabricantes')->get();
        return view('cigarrillos.FormCigarrillos', ['fabricantes' => $fabricantes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //var_dump($request->all());
        $cigarrillo = Cigarrillo::create($request->all());
        $cadena = "Cigarrillo registrado con exito, con el ID" . $cigarrillo->idcigarrillo;
        $cigarrillos = DB::table('cigarrillos')->get();
        return view('cigarrillos.tableCigarrillos', ['cigarrillos' =>$cigarrillos],compact('cadena'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('cigarrillos.tableCigarrillos');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
