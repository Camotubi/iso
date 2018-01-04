@extends('layouts.app')
@section('content')
    <h1> Registro de Evaluación</h1>
    <form method="POST" action="/projects/{{$project->id}}/deliverables/{{$deliverable->id}}/metricDeliverables/{{$metricDeliverable->id}}/evaluations">
        <div class = "container">
            {{ csrf_field() }}
            <div class="form-group">
            <label>Fecha de la evaluación:</label>
            <input class = "form-control" name ="date" type="date">
            </div>
            <p>Formula de la Métrica: {{$metric->formula}}</p>
            <br>
            @for($i = 0; $i < $numVariables; $i++)
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="">Variable:</label>
                  <div class="form-group">
                    <input type="text" name="variable[]" class="form-control">
                  </div>
              </div>
              <div class="form-group col-md-4">
                <label for="">Valor:</label>
                <div class="form-group">
                  <input type="number" name="value[]" step="any" class="form-control">
                </div>
              </div>
            </div>
            @endfor
            <a href="/projects/{{$project->id}}/deliverables/{{$deliverable->id}}/metricDeliverables/{{$metricDeliverable->id}}/evaluations/create?numVariables={{$numVariables}}&modVariablesFields=p">Agregar</a>
            <a href="/projects/{{$project->id}}/deliverables/{{$deliverable->id}}/metricDeliverables/{{$metricDeliverable->id}}/evaluations/create?numVariables={{$numVariables}}&modVariablesFields=m">Quitar</a>
          </div>
          <input class= "btn btn-primary button" type = "submit" value = "Registrar">
    </form>
@endsection
