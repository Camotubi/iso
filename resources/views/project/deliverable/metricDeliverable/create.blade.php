
@extends('layouts.app')

@section('content')
    <h1> Registro de Métrica</h1>
    <div id="app">
        <add-metric-form url="/projects/{{$project->id}}/deliverables/{{$deliverable->id}}/metricDeliverables"></add-metric-form>
    </div>
@endsection
