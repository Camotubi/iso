
@extends('layouts.app')

@section('content')
    <h1> Creacion de Proyecto </h1>
    <form method="POST" action="/projects/{{$project->id}}/deliverables">
        <div class = "container">
            {{ csrf_field() }}
            <div class="form-group">
            <label>Nombre del Entregable:</label>
            <input class = "form-control" name = "name" required>
            </div>
            <input class= "btn btn-primary" type = "submit" value = "Crear Proyecto">
        </div>

    </form>
@endsection
