<?php 
    namespace App\Http\Controllers;
?>
@extends('layouts.app')
@section('content')
    <h1>Cals de la Generalitat de Catalunya</h1>
    <h3>Casals</h3>
    <a href="{{route('añadir')}}" class="añadirBTN">Añadir</a>
    @if (session('status'))
        <p id="status">{{session('status')}}</p>
    @endif
    <table>
        <tr>
            <td>Nom</td>
            <td>Data de inici</td>
            <td>Data de fi</td>
            <td>Num Places</td>
            <td>Ciutat</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
        @if (count($casals)>0)
            @foreach ($casals as $casal)
                <tr>
                    <td>{{$casal->nom}}</td>
                    <td>{{$casal->data_inici}}</td>
                    <td>{{$casal->data_final}}</td>
                    <td>{{$casal->n_places}}</td>
                    <td>{{CasalController::devolverNomCiutat($casal->id_ciutat)}}</td>
                    <td> <a href="{{route('editar',$casal)}}"></a> </td>
                    <td>
                        <form action="{{route('eliminar',$casal)}}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
                
        @else

            <p style="color: red">NO HAY CASALES</p>

        @endif
    </table>

@endsection