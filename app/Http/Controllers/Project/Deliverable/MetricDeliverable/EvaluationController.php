<?php

namespace App\Http\Controllers\Project\Deliverable\MetricDeliverable;

use App\Evaluation;
use App\Project;
use App\Measurement;
use App\Deliverable;
use App\MetricDeliverable;
use App\Metric;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\MetricDeliverable  $metricDeliverable
     * @return \Illuminate\Http\Response
     */
    public function index(MetricDeliverable $metricDeliverable)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\MetricDeliverable  $metricDeliverable
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project, Deliverable $deliverable, MetricDeliverable $metricDeliverable)
    {
        $metric = Metric::find($metricDeliverable->metric_id);
        return(view('project.deliverable.metricDeliverable.evaluation.create',['project'=>$project,'deliverable' => $deliverable,'metricDeliverable' => $metricDeliverable, 'metric' => $metric]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MetricDeliverable  $metricDeliverable
     * @return \Illuminate\Http\Response
     */
    public function store(Project $project, Deliverable $deliverable, Request $request, MetricDeliverable $metricDeliverable)
    {
        $evaluation = new Evaluation;
        $evaluation ->date = $request->input('date');
        $evaluation -> metricDeliverable()->associate($metricDeliverable);
        $evaluation->save();
        $variables = $request->input('variable');
        $values = $request->input('value');
        $data = array();
        foreach($variables as $key => $n ) {
            if(!is_null($variables[$key]))
            array_push($data,array('variable' => $variables[$key],'value'=>$values[$key],'evaluation_id' => $evaluation->id));
        }
        Measurement::insert($data);


/*Load array */

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MetricDeliverable  $metricDeliverable
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function show(MetricDeliverable $metricDeliverable, Evaluation $evaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MetricDeliverable  $metricDeliverable
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(MetricDeliverable $metricDeliverable, Evaluation $evaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MetricDeliverable  $metricDeliverable
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MetricDeliverable $metricDeliverable, Evaluation $evaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MetricDeliverable  $metricDeliverable
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(MetricDeliverable $metricDeliverable, Evaluation $evaluation)
    {
        //
    }
}
