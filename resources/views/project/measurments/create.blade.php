
@extends('layouts.app')

@section('content')
    <h1> Registro de Medida</h1>
    <form method="POST" action="/projects/{{$project->id}}/measurments">
        <div class = "container">
            {{ csrf_field() }}
            <div class="form-group">
            <label>Nombre de la medida:</label>
            <input class = "form-control" name = "name" required>
            </div>
            <input class= "btn btn-primary" type = "submit" value = "Registrar">
        </div>
    </form>
@endsection
