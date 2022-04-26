<?php 
    namespace App\Http\Controllers;
?>
@extends('layouts.app')
@section('content')

    <h1>Añadir Nuevo Casal</h1>
    <a href="{{route('/')}}" class="añadirBTN">volver</a>
    @if (session('status'))
        <p id="status">{{session('status')}}</p>
    @endif

    <form action="{{route('añadir')}}" class="formAñadir">
        <span>Nom</span>
        <input type="text" name="nom"><br>
        <span>Data d'inici</span>
        <input type="date" name="inici"><br>
        <span>Data final</span>
        <input type="date" name="final"><br>
        <span>Ciutat</span>
        <select name="ciutat" id="ciutat">
            @if ($ciutats)
                @foreach ($ciutats as $ciutat)
                    <option value="{{$ciutat->id}}">{{$ciutat->nom}}</option>
                @endforeach
            @else
                <option value="null">No hay ciudades</option>
            @endif
        </select><br>
        <span>Num places</span>
        <input type="number" name="places"><br>
        <button type="submit">Añadir</button>
    </form>

@endsection