@extends('layouts.app')
@section('content')
    <h1> Registro de Evaluación</h1>
    <form method="POST" action="/projects/{{$project->id}}/deliverables/{{$deliverable->id}}/metricDeliverables/{{$metricDeliverable->id}}/evaluations">
        <div class = "container">
            {{ csrf_field() }}
            <div class="form-group">
            <label>Fecha de la evaluación:</label>
            <input class = "form-control" name = "date" type="date">
            </div>
            @for($i=0; $i<10;$i++)
                <input type="text" name="variable[]">
                <input type="number" name="value[]">
            @endfor
            <input class= "btn btn-primary" type = "submit" value = "Registrar">
        </div>
    </form>
@endsection