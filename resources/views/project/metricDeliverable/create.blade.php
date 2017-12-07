
@extends('layouts.app')

@section('content')
    <h1> Registro de Metrica</h1>
    <form method="POST" action="/projects/{{$project->id}}/deliverables/{{$deliverable->id}}/metricDeliverables">
        <div class = "container">
            {{ csrf_field() }}
            <div class="form-group">
            <label>Métrica:</label>
            <select class = "form-control" name = "metric" required>
              @foreach($metrics as $metric)
              <option value="{{$metric->id}}">{{$metric->name}}</option>
              @endforeach
            </select>
            </div>
            <input class= "btn btn-primary" type = "submit" value = "Registrar">
        </div>
    </form>
@endsection
