<link rel="stylesheet" href="<?php echo asset('css/tabla.css')?>" type="text/css"> 

@extends('layouts.app')

@section('content')
<div class="container">


@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif
<br>
<a href="{{ url('empleado/create')}}">Agregar persona</a>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>A. Paterno</th>
            <th>A. Materno</th>
            <th>Acciones</th>
        </tr>

    </thead>
    <tbody>
        @foreach( $empleados as $empleado )
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>
                <img class="foto-usuario" src="{{ asset('storage').'/'.$empleado->foto }}">
            </td>
            <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->apellidoPaterno }}</td>
            <td>{{ $empleado->apellidoMaterno }}</td>
            <td class="acciones">
                <a class="btn editar" href="{{ url('/empleado/'.$empleado->id.'/edit') }}">Editar</a>                 
                <form action="{{ url('/empleado/'.$empleado->id ) }}" method="post">
                    @csrf
                    {{ method_field('DELETE')}}
                    <input class="btn borrar" type="submit" onclick="return confirm('¿Si lo quieres eliminar?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
{!! $empleados->links()  !!}
<div>
@endsection