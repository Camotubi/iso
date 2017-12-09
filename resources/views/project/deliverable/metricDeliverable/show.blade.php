@extends('layouts.app')
@section('content')
    Valor actual: {{$metricDeliverable->currentValue()}}
    <br>
    @php
      $aye = $metricDeliverable->valueHistory();
    @endphp
    Historial:
    <ul>
      @foreach ($aye as $yo)
        <li>{{round($yo,2)}}</li>
      @endforeach
    </ul>
    <br>
  <a href="/projects/{{$project->id}}/deliverables/{{$deliverable->id}}/metricDeliverables/{{$metricDeliverable->id}}/evaluations/create" class="btn btn-primary button2">Agregar Evaluacion</a>
  <canvas id ="graph"></canvas>
  <script src="/js/Chart.min.js"></script>
  <script>
</script>
  <script>
 var datos= {
     labels:
		{{json_encode($metricDeliverable->valueHistory())}}
,

  datasets:[
    {
	    backgroundColor:'rgba(200, 220, 255, 0.5)',
	    strokeColor:'rgba(200, 220, 255, 0.2)',
      data:

		{{json_encode($metricDeliverable->valueHistory())}}

    }
  ]

}
var context = document.querySelector('#graph').getContext('2d');
new Chart(context,{
type:"line",
	data:datos
});
  </script>

@endsection
