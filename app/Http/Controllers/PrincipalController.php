<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{

    public function cig(){
        return view('cigarrera');
    }

    //SECCIONES DE CIGARRILLOS
    public function formCig(){
        return view('FormCigarrillos');
    }


    //SECCIONES DE COMPRAS
    public function formComp(){
        return view('FormCompras');
    }
    public function tabComp(){
        return view('tableCompras');
    }

    //SECCIONES DE ESTANCOS
    public function formEst(){
        return view('FormEstancos');
    }
    public function tabEst(){
        return view('tableCompras');
    }

    //SECCIONES DE FABRICANTES
    public function formFab(){
        return view('FormFabricantes');
    }


    //SECCIONES DE VENTAS
    public function formVen(){
        return view('FormVentas');
    }
    public function tabVen(){
        return view('tableVentas');
    }
}
