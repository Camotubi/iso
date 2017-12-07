@extends('layouts.app')
@section('content')
<br>
<table>
			<tr>
				<th>Codigo</th>
				<th>Nombre del Proyecto</th>
				<th>Creado en</th>
				<th>Actualizado en</th>
			</tr>
		@foreach($projects as $project)
			<tr>
				<td>{{$project->id}}</td>
				<td><a href="/projects/{{$project->id}}/show">{{$project->name}}</a></td>
				<td>{{$project->created_at}}</td>
				<td>{{$project->updated_at}}</td>
			</tr>
		@endforeach
		</table>
	</div>
@endsection
