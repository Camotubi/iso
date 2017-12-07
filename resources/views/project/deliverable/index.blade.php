@extends('layouts.app')
@section('content')
<br>
<table>
			<tr>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Creado en</th>
				<th>Actualizado en</th>
			</tr>
		@foreach($deliverables as $deliverable)
			<tr>
				<td>{{$deliverable->id}}</td>
				<td>{{$deliverable->name}}</td>
				<td>{{$deliverable->created_at}}</td>
				<td>{{$deliverable->updated_at}}</td>
			</tr>
		@endforeach
		</table>
	</div>
@endsection
