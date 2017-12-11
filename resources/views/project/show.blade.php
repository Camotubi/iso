@extends('layouts.app')
@section('content')
<h1>{{$project->name}}</h1>
<br>
<h5>Puntajes de Atributos de Calidad:</h5>
@foreach($qualities as $quality)
    <strong>{{$quality["name"]}}:</strong> {{$quality["score"]}}
    <br>

@endforeach
<br>
<h3>Entregables</h3>
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
                <td>{{$deliverable->id}}</td>
            <td><a href="/projects/{{$project->id}}/deliverables/{{$deliverable->id}}">{{$deliverable->name}}</a></td>
				<td>{{$deliverable->created_at}}</td>
				<td>{{$deliverable->updated_at}}</td>
			</tr>
		@endforeach
		</table>
		<a href="/projects/{{$project->id}}/deliverables/create" class="btn btn-primary button">Crear nuevo entregable</a>
        @php
        //dd($qualities)
    @endphp
    <br>
  <script src="/js/Chart.min.js"></script>
  <div style="display:inline;">
     <div style="display:inline-block;width:49%;padding:0;margin:0;">
        <canvas id="canvas1"></canvas>
    </div>
     <div style="display:inline-block;width:50%">
        <canvas id="canvas2"></canvas>
    </div>
     <div style="display:inline-block;width:50%">
        <canvas id="canvas3"></canvas>
    </div>
    </div>
    <script>
        'use strict';

window.chartColors = {
	red: 'rgb(255, 99, 132)',
	orange: 'rgb(255, 159, 64)',
	yellow: 'rgb(255, 205, 86)',
	green: 'rgb(75, 192, 192)',
	blue: 'rgb(54, 162, 235)',
	purple: 'rgb(153, 102, 255)',
	grey: 'rgb(201, 203, 207)'
};

(function(global) {
	var Months = [
		'January',
		'February',
		'March',
		'April',
		'May',
		'June',
		'July',
		'August',
		'September',
		'October',
		'November',
		'December'
	];

	var COLORS = [
		'#4dc9f6',
		'#f67019',
		'#f53794',
		'#537bc4',
		'#acc236',
		'#166a8f',
		'#00a950',
		'#58595b',
		'#8549ba'
	];

	var Samples = global.Samples || (global.Samples = {});
	var Color = global.Color;

	Samples.utils = {
		// Adapted from http://indiegamr.com/generate-repeatable-random-numbers-in-js/
		srand: function(seed) {
			this._seed = seed;
		},

		rand: function(min, max) {
			var seed = this._seed;
			min = min === undefined ? 0 : min;
			max = max === undefined ? 1 : max;
			this._seed = (seed * 9301 + 49297) % 233280;
			return min + (this._seed / 233280) * (max - min);
		},

		numbers: function(config) {
			var cfg = config || {};
			var min = cfg.min || 0;
			var max = cfg.max || 1;
			var from = cfg.from || [];
			var count = cfg.count || 8;
			var decimals = cfg.decimals || 8;
			var continuity = cfg.continuity || 1;
			var dfactor = Math.pow(10, decimals) || 0;
			var data = [];
			var i, value;

			for (i = 0; i < count; ++i) {
				value = (from[i] || 0) + this.rand(min, max);
				if (this.rand() <= continuity) {
					data.push(Math.round(dfactor * value) / dfactor);
				} else {
					data.push(null);
				}
			}

			return data;
		},

		labels: function(config) {
			var cfg = config || {};
			var min = cfg.min || 0;
			var max = cfg.max || 100;
			var count = cfg.count || 8;
			var step = (max - min) / count;
			var decimals = cfg.decimals || 8;
			var dfactor = Math.pow(10, decimals) || 0;
			var prefix = cfg.prefix || '';
			var values = [];
			var i;

			for (i = min; i < max; i += step) {
				values.push(prefix + Math.round(dfactor * i) / dfactor);
			}

			return values;
		},

		months: function(config) {
			var cfg = config || {};
			var count = cfg.count || 12;
			var section = cfg.section;
			var values = [];
			var i, value;

			for (i = 0; i < count; ++i) {
				value = Months[Math.ceil(i) % 12];
				values.push(value.substring(0, section));
			}

			return values;
		},

		color: function(index) {
			return COLORS[index % COLORS.length];
		},

		transparentize: function(color, opacity) {
			var alpha = opacity === undefined ? 0.5 : 1 - opacity;
			return Color(color).alpha(alpha).rgbString();
		}
	};

	// DEPRECATED
	window.randomScalingFactor = function() {
		return Math.round(Samples.utils.rand(-100, 100));
	};

	// INITIALIZATION

	Samples.utils.srand(Date.now());

	// Google Analytics
	/* eslint-disable */

}(this));

    var color = Chart.helpers.color;
    var config1 = {
        type: 'radar',
        data: {
            labels: 
            [
                @foreach( $qualities[0]["characteristics"] as $characteristic) 
                "{{$characteristic["name"]}}",
            @endforeach
            ],
            datasets: [{
                label: '{{$qualities[0]["name"]}}',
                backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
                borderColor: window.chartColors.blue,
                pointBackgroundColor: window.chartColors.blue,
                data: [
                    @foreach( $qualities[0]["characteristics"] as $characteristic)
                    {{ $characteristic["score"]*100 }},
                    @endforeach
                ]
            },
            ]
        },
        options: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: '{{$qualities[0]["name"]}}'
            },
            scale: {
              ticks: {
                beginAtZero: true,
                  max: 100,
              }
            }
        }
    };

    var config2 = {
        type: 'radar',
        data: {
            labels: 
            [
                @foreach( $qualities[1]["characteristics"] as $characteristic) 
                "{{$characteristic["name"]}}",
            @endforeach
            ],
            datasets: [{
                label: '{{$qualities[1]["name"]}}',
                backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
                borderColor: window.chartColors.red,
                pointBackgroundColor: window.chartColors.red,
                data: [
                    @foreach( $qualities[1]["characteristics"] as $characteristic)
                    {{ $characteristic["score"]*100 }},
                    @endforeach
                ]
            },
            ]
        },
        options: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: '{{$qualities[1]["name"]}}'
            },
            scale: {
              ticks: {
                beginAtZero: true,
                  max: 100,
              }
            }
        }
    };
    var config3 = {
        type: 'radar',
        data: {
            labels: 
            [
                @foreach( $qualities[2]["characteristics"] as $characteristic) 
                "{{$characteristic["name"]}}",
            @endforeach
            ],
            datasets: [{
                label: '{{$qualities[2]["name"]}}',
                backgroundColor: color(window.chartColors.green).alpha(0.2).rgbString(),
                borderColor: window.chartColors.green,
                pointBackgroundColor: window.chartColors.green,
                data: [
                    @foreach( $qualities[2]["characteristics"] as $characteristic)
                    {{ $characteristic["score"]*100 }},
                    @endforeach
                ]
            },
            ]
        },
        options: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: '{{$qualities[2]["name"]}}'
            },
            scale: {
              ticks: {
                beginAtZero: true,
                  max: 100,
              }
            }
        }
    };
    window.onload = function() {
        window.myRadar = new Chart(document.getElementById("canvas1"), config1);
        window.myRadar = new Chart(document.getElementById("canvas2"), config2);
        window.myRadar = new Chart(document.getElementById("canvas3"), config3);
    };

    </script>
@endsection
