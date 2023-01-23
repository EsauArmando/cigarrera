@extends('layouts.cigarrera')
@section('tablaCigarrillos')<br><br>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tabla de Cigarros</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    tabla de Cigarros
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>idcigarro</th>
                                <th>marca</th>
                                <th>filtro</th>
                                <th>idfabricante</th>
                                <th>precio</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>idcigarro</th>
                                <th>marca</th>
                                <th>filtro</th>
                                <th>idfabricante</th>
                                <th>precio</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if(!empty($cigarrillos))
                            @foreach($cigarrillos as $cigarrillo)
                            <tr>
                                <td>{{$cigarrillo->idcigarro}}</td>
                                <td>{{$cigarrillo->marca}}</td>
                                <td>{{$cigarrillo->filtro}}</td>
                                <td>{{$cigarrillo->precio}}</td>
                                <td>{{$cigarrillo->idfabricante}}</td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection