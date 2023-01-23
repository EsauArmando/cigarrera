<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cigarrillo;
use App\Models\Compras;
use App\Models\Estanco;
use Illuminate\Support\Facades\DB;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = DB::table('compras')->get();

        return view('compras.tableCompras', ['compras' => $compras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estancos = DB::table('estancos')->get();
        $cigarrillos = DB::table('cigarrillos')->get();
        return view('compras.FormCompras', ['estancos' => $estancos, 'cigarrillos' => $cigarrillos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compra = Compras::create($request->all());
        $cadena = " registrado con exito, con el ID" . $compra->idcompra;
        $compras = DB::table('compras')->get();
        return view('compras.tableCompras', ['compras' => $compras], compact('cadena'));
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
