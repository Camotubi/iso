@extends('layouts.app')
@section('content')
    <h1> Registro de Evaluación</h1>
    <form method="POST" action="/projects/{{$project->id}}/derivables/{{$derivable->id}}/metricDeliverables/{{$metricDerivable->id}}/evaluations/{{$evaluation->id}}/measurements">
        <div class = "container">
            {{ csrf_field() }}
            <div class="form-group">
            <label>Fecha de la evaluación:</label>
            <input class = "form-control" name = "date" type="date">
            </div>
            <input class= "btn btn-primary" type = "submit" value = "Registrar">
        </div>
    </form>
@endsection
