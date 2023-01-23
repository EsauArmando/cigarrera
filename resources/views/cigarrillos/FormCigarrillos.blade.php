@extends('layouts.cigarrera')
@section('formCigarrillos')
<div id="layoutSidenav_content"><br>
    <h1 class="mt-4 text-center">Formulario de Cigarrillos</h1>
    <form class="px-4" method="post" action="{{URL('cigarrillos/save')}}">
        {{(csrf_field())}}
        <label for="">IDCigarro</label>
        <input type="text" class="form-control" name="" placeholder="" disabled><br>
        <label for="">Marca</label>
        <input type="text" class="form-control" name="marca" placeholder="Inserta la Marca"><br>
        <label for="">Filtro</label>
        <input type="text" class="form-control" name="filtro" placeholder="Inserta el Filtro"><br>
        @if(!empty($fabricantes))
        <select name="idfabricante">
            @foreach($fabricantes as $fabricante)
            <option value="{{$fabricante->idfabricante}}">{{$fabricante->nombre}}-{{$fabricante->pais}}</option>
            @endforeach
        </select><br>
        @endif
        <label for="">Precio</label>
        <input type="decimal" class="form-control" name="precio" placeholder="Inserta el Precio"><br>
        <input type="submit" class="btn btn-outline-dark" value="Insertar">
    </form>
    </main>
</div>
@endsection