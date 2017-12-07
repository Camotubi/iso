@extends('layouts.app')
@section('content')
<h1>{{$project->name}}</h1>
<br>
<h3>Entregables</h3>
<br>
<a href="/projects/{{$project->id}}/deliverables/create">Agregar Entregable</a>
<table>
			<tr>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Creado en</th>
				<th>Actualizado en</th>
			</tr>
    @foreach($project->deliverables()->get() as $deliverable)
			<tr>
                <td>{{$deliverable->id}}</td>
            <td><a href="/projects/{{$project->id}}/deliverables/{{$deliverable->id}}">{{$deliverable->name}}</a></td>
				<td>{{$deliverable->created_at}}</td>
				<td>{{$deliverable->updated_at}}</td>
			</tr>
		@endforeach
		</table>
		<a href="/projects/{{$project->id}}/deliverables/create" class="btn btn-primary">Crear nuevo entregable</a>
	</div>
@endsection
