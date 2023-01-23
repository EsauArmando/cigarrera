@extends('cigarrera')
@section('contenido')
  <h1 class="text-primary">Un Titulo</h1>
  @if($i<10)
    <h4>{($i)} es pequeño </h4>
    @elseif($i==10)
      <h4>{($i)} es 10</h4>
    @else
      <h4>{($i)} es 10</h4>
  @endif
@endsection