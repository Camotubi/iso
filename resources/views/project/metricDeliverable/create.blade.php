
@extends('layouts.app')

@section('content')
    <h1> Registro de Metrica</h1>
    <form method="POST" action="/projects/{{$project->id}}/metricDeliverable">
        <div class = "container">
            {{ csrf_field() }}
            <div class="form-group">
            <label>Metrica:</label>
            <select class = "form-control" name = "metric" required>
              <option></option>
            </select>
            <label>Entregable:</label>
            <select class = "form-control" name = "deliverable" required>
              <option></option>
            </select>
            </div>
            <input class= "btn btn-primary" type = "submit" value = "Registrar">
        </div>
    </form>
@endsection
