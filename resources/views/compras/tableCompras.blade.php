@extends('layouts.cigarrera')
@section('tablaCompras')<br><br>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tabla de Compras</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    tabla de Compras
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>IDCompra</th>
                                <th>CIF</th>
                                <th>IDCigarro</th>
                                <th>cantidad</th>
                                <th>precio</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>IDCompra</th>
                                <th>CIF</th>
                                <th>IDCigarro</th>
                                <th>cantidad</th>
                                <th>precio</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                            <tr>
                                @if(!empty($compras))
                                @foreach($compras as $compra)
                            <tr>
                                <td>{{$compra->idcompra}}</td>
                                <td>{{$compra->CIF}}</td>
                                <td>{{$compra->idcigarro}}</td>
                                <td>{{$compra->cantidad}}</td>
                                <td>{{$compra->precio}}</td>
                            </tr>
                            <tr>
                                @endforeach
                                @endif
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection