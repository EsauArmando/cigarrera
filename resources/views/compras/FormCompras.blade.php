@extends('layouts.cigarrera')
@section('formCompras')
<div id="layoutSidenav_content"><br>
    <h1 class="mt-4 text-center">Formulario de Compras</h1>
    <form class="px-4" method="post" action="{{URL('compras/save')}}">
        {{(csrf_field())}}
        <label for="">IDCompra</label>
        <input type="text" class="form-control" name="" placeholder="" disabled><br>
        @if(!empty($estancos))
        <select name="CIF">
            @foreach($estancos as $estanco)
            <option value="{{$estanco->CIF}}">{{$estanco->nombre}}-{{$estanco->direccion}}</option>
            @endforeach
        </select><br>
        @endif
        <label for="">idcigarro</label>
        @if(!empty($cigarrillos))
        <select name="idcigarro">
            @foreach($cigarrillos as $cigarrillo)
            <option value="{{$cigarrillo->idcigarro}}">{{$cigarrillo->marca}}-{{$cigarrillo->filtro}}-{{$cigarrillo->precio}}</option>
            @endforeach
        </select><br>
        @endif
        <label for="">Cantidad</label>
        <input type="text" class="form-control" name="cantidad" placeholder="Inserta la cantidad"><br>
        <label for="">Precio</label>
        <input type="decimal" class="form-control" name="precio" placeholder="Inserta el precio"><br>
        <input type="submit" class="btn btn-outline-dark" value="Insertar">
    </form>
    </main>
</div>
@endsection