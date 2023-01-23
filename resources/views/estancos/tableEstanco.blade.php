@extends('layouts.cigarrera')
@section('tablaEstancos')<br><br>
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Tabla de Estancos</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            tabla de Estancos
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>CIF</th>
                        <th>Nombre</th>
                        <th>Direcion</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>CIF</th>
                        <th>Nombre</th>
                        <th>Direcion</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        @if(!empty($estancos))
                        @foreach($estancos as $estanco)
                        <td>{{$estanco->CIF}}</td>
                        <td>{{$estanco->nombre}}</td>
                        <td>{{$estanco->direccion}}</td>
                    </tr>
                    @endforeach
                    @else
                    <h2>No hay productos registrados</h2>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection