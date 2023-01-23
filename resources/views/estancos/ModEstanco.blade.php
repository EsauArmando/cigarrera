@extends('layouts.cigarrera')
@section('modifEstanco')
<div id="layoutSidenav_content"><br><br>
    <h1 class="mt-4 text-center">Formulario de Estancos</h1>
    <form class="px-4" method="post" action="{{URL('estancos/update')}}">
        {{(csrf_field())}}
        <label for="">CIF</label>
        <input type="text" class="form-control" name="" placeholder="" disabled><br>
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="nombre" placeholder="Inserta el nombre"><br>
        <label for="">Direccion</label>
        <input type="text" class="form-control" name="direccion" placeholder="Inserta la Direcion"><br>
        <input type="submit" class="btn btn-outline-dark" value="Modificar">
    </form>
    </main>
</div>
@endsection