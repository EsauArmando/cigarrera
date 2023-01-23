<?php

namespace App\Http\Controllers;

use App\Models\Estanco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstancoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estancos = DB::table('estancos')->get();

        return view('estancos.tableEstanco', ['estancos' => $estancos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estancos.FormEstanco');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estanco = Estanco::create($request->all());
        $cadena = "Estanco registrado con exito, con el id" . $estanco->id;
        $estancos = DB::table('estancos')->get();
        return view('estancos.tableEstanco', ['estancos' =>$estancos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $estanco = Estanco::create($request->all());
        $estancos = DB::table('estancos')->get();
        return view('estancos.tableEstanco');
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
