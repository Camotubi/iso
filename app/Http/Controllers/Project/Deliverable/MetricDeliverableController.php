<?php

namespace App\Http\Controllers\Project\Deliverable;

use App\MetricDeliverable;
use App\Deliverable;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MetricDeliverableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function index(Deliverable $deliverable)
    {
        return view('project.deliverable.metricDeliverable.index', ['deliverable' => $deliverable,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function create(Deliverable $deliverable)
    {

        return view('project.deliverable.metricDeliverable.create', ['deliverable' => $deliverable, 'metric' => App\Metric::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Deliverable $deliverable)
    {
        $metricDeliverable = new MetricDeliverable;
        $metricDeliverable;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deliverable  $deliverable
     * @param  \App\MetricDeliverable  $metricDeliverable
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project,Deliverable $deliverable, MetricDeliverable $metricDeliverable)
    {
        return view('project.deliverable.metricDeliverable.show',['project'=>$project,'metricDeliverable' => $metricDeliverable]);
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
