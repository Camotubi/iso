<?php

namespace App\Http\Controllers\Project\Deliverable\MetricDeliverable;

use App\Evaluation;
use App\MetricDeliverable;
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
    public function create(MetricDeliverable $metricDeliverable)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MetricDeliverable  $metricDeliverable
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, MetricDeliverable $metricDeliverable)
    {
        //
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
