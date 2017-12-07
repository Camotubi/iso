
@extends('layouts.app')

@section('content')
    <h1> Registro de Entregable</h1>
    <h4>Proyecto Padre: {{$project->name}}</h4>
    <form method="POST" action="/projects/{{$project->id}}/deliverables">
        <div class = "container">
            {{ csrf_field() }}
            <div class="form-group">
            <label>Nombre del Entregable:</label>
            <input class = "form-control" name = "name" required type="text">
            </div>
            <input class= "btn btn-primary" type = "submit" value = "Registrar Entregable">
        </div>

    </form>
@endsection
