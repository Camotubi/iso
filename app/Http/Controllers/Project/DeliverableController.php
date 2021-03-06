<?php

namespace App\Http\Controllers\Project;

use App\Deliverable;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeliverableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function index(Project $project)
    {
      $deliverables = Deliverable::all();
        return view('project.deliverable.index', ['project' => $project, 'deliverables' => $deliverables]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project)
    {

        return view('project.deliverable.create', ['project' => $project]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Project $project)
    {
        $deliverable = new Deliverable;
        $deliverable -> name = $request->input('name');
        $deliverable -> project()->associate($project);
        $deliverable -> save();
        return redirect("/projects/".$project->id)->with(['success' => 'Entregable creado']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @param  \App\Deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, Deliverable $deliverable)
    {
        return view('project.deliverable.show',['project'=>$project,'deliverable' => $deliverable]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @param  \App\Deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project, Deliverable $deliverable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @param  \App\Deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project, Deliverable $deliverable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @param  \App\Deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project, Deliverable $deliverable)
    {
        //
    }
}
