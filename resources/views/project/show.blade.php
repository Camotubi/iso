@extends('layouts.app')
@section('content')
<h1>{{$project->name}}</h1>
<br>
<h3>Deliverable</h3>
<br>
<table>
			<tr>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Creado en</th>
				<th>Actualizado en</th>
			</tr>
            @foreach($project->deliverables()->get() as $deliverable)
			<tr>
                <td><a href="/projects/{{$project->id}}/deliverables/{{$deliverable->id}}">{{$deliverable->id}}</a></td>
				<td>{{$deliverable->name}}</td>
				<td>{{$deliverable->created_at}}</td>
				<td>{{$deliverable->updated_at}}</td>
			</tr>
		@endforeach
		</table>
	</div>
@endsection
