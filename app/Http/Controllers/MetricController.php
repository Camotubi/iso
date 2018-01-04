<?php

namespace App\Http\Controllers;

use App\Metric;
use App\Deliverable;
use Illuminate\Http\Request;

class MetricController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $parentid = $request->input('parent');
      $deliverable = Deliverable::find($request->input('deliverableId'));
      $metric = Metric::where('subcharacteristic_id', $parentid)
        ->whereNotIn('id', $deliverable->metrics()->get()->pluck('id')->all())->get();
      return $metric;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Metric  $metric
     * @return \Illuminate\Http\Response
     */
    public function show(Metric $metric)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Metric  $metric
     * @return \Illuminate\Http\Response
     */
    public function edit(Metric $metric)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Metric  $metric
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Metric $metric)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Metric  $metric
     * @return \Illuminate\Http\Response
     */
    public function destroy(Metric $metric)
    {
        //
    }
}
