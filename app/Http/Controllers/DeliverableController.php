<?php

namespace App\Http\Controllers;

use App\Deliverable;
use App\Project;
use Illuminate\Http\Request;

class DeliverableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliverables = Deriverable::all();
        return view('project.deliverable.index', ['deliverables' => $deliverables]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($projectId)
    {

        return view('deliverable.create', ['project' => Project::find($projectId)]);
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
     * @param  \App\deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function show($projectId, $deliverableId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function edit(Deliverable $deliverable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deliverable $deliverable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deliverable $deliverable)
    {
        //
    }
}
