
@extends('layouts.app')

@section('content')
    <h1> Registro de Medida</h1>
    <form method="POST" action="/projects/{{$project->id}}/derivables/{{$derivable->id}}/metricDeliverables/{{$metricDerivable->id}}/evaluations/{{$evaluation->id}}/measurements">
        <div class = "container">
            {{ csrf_field() }}
            <div class="form-group">
            <label>Variable:</label>
            <input class = "form-control" name = "variable" required type="text">
            <label>Valor:</label>
            <input class = "form-control" name = "value" required type="number" step="any">
            </div>
            <input class= "btn btn-primary" type = "submit" value = "Registrar">
        </div>
    </form>
@endsection
