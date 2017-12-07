@extends('layouts.app')

@section('content')
    <h1> Creacion de Proyecto </h1>
    <form method="POST" action="/projects">
        <div class = "container">
            {{ csrf_field() }}
            <div class="form-group">
            <label>Nombre de Proyecto:</label>
            <input class = "form-control" name = "name" required>
            </div>
            <input class= "btn btn-primary" type = "submit" value = "Crear Proyecto">
        </div>

    </form>
@endsection
