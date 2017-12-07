
@extends('layouts.app')
@section('content')
<br>
<table>
			<tr>
				<th>Metrica</th>
				<th>Estado</th>
			</tr>
            @foreach($deliverable->metrics()->get() as $metric)
			<tr>

                <td><a href="/projects/{{$project->id}}/deliverables/{{$deliverable->id}}/metricDeliverables/{{$metric->metricDeliverables()->first()->id}}">{{$metric->name}}</a></td>
                <td>{{$metric->metricDeliverables()->first()->currentValue()}}</td>
			</tr>
		@endforeach
		</table>
	</div>
@endsection
