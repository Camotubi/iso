<?php

namespace App\Http\Controllers\Project\Deliverable;

use App\MetricDeliverable;
use App\Deliverable;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Metric;

class MetricDeliverableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function index(Project $project, Deliverable $deliverable)
    {
        return view('project.metricDeliverable.index', ['deliverable' => $deliverable]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project, Deliverable $deliverable)
    {

        return view('project.deliverable.metricDeliverable.create', ['deliverable' => $deliverable, 
            'metrics' => Metric::whereNotIn('id',$deliverable->metrics()->get()->pluck('id')->all())->get(), 'project' => $project]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Project $project, Deliverable $deliverable)
    {
        $deliverable->metrics()->attach($request->input('metric'));
        return redirect('/dashboard')->with(['success' => 'Metrica seleccionada']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deliverable  $deliverable
     * @param  \App\MetricDeliverable  $metricDeliverable
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, Deliverable $deliverable, MetricDeliverable $metricDeliverable)
    {
        return view('project.deliverable.metricDeliverable.show',['project'=>$project,'deliverable'=>$deliverable ,'metricDeliverable' => $metricDeliverable]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deliverable  $deliverable
     * @param  \App\MetricDeliverable  $metricDeliverable
     * @return \Illuminate\Http\Response
     */
    public function edit(Deliverable $deliverable, MetricDeliverable $metricDeliverable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deliverable  $deliverable
     * @param  \App\MetricDeliverable  $metricDeliverable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deliverable $deliverable, MetricDeliverable $metricDeliverable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deliverable  $deliverable
     * @param  \App\MetricDeliverable  $metricDeliverable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deliverable $deliverable, MetricDeliverable $metricDeliverable)
    {
        //
    }
}
