
@extends('layouts.app')
@section('content')
	<h1>{{$deliverable->name}}</h1>
	<br>
	<h3>Métricas</h3>
	<br>
<table>
			<tr>
				<th>Métrica</th>
				<th>Estado</th>
			</tr>
            @foreach($deliverable->metrics()->get() as $metric)
			<tr>

                <td><a href="/projects/{{$project->id}}/deliverables/{{$deliverable->id}}/metricDeliverables/{{$metric->metricDeliverables()->first()->id}}">{{$metric->name}}</a></td>
                <td>{{$metric->metricDeliverables()->first()->currentValue()}}</td>
			</tr>
		@endforeach
		</table>
		<a href="/projects/{{$project->id}}/deliverables/{{$deliverable->id}}/metricDeliverables/create" class="btn btn-primary button">Agregar Métrica</a>
	</div>
@endsection
