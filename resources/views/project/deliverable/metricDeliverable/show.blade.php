@extends('layouts.app')
@section('content')
    valor actual: {{$metricDeliverable->currentValue()}}
    historial :{{json_encode($metricDeliverable->valueHistory())}}

    <a href="/projects/{{$project->id}}/deliverables/{{$deliverable->id}}/metricDeliverables/{{$metricDeliverable->id}}/evaluations/create">Agregar Evaluacion</a>
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
