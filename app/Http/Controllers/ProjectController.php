<?php

namespace App\Http\Controllers;

use App\Project;
use App\QualityAttribute;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('project.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project;
        $project->name = $request->input('name');
        $project->save();
        return redirect('/dashboard')->with(['success' => 'Proyecto creado']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        $metricDeliverables = collect();
        foreach ($project->deliverables()->get() as $deliverable) {
            $metricDeliverables->
                push($deliverable->metricDeliverables()->pluck('id'));
        }
        $metricDeliverables = $metricDeliverables->flatten();
        $qualities = QualityAttribute::with(
            ['characteristics.subcharacteristics.metrics.metricDeliverables' => 
            function ($q) use ($metricDeliverables) {
                $q->whereIn('id', $metricDeliverables);

            }]
        )->get()->toArray();
        foreach ($qualities as &$quality) {
            $qualityScore=0;
            foreach ($quality['characteristics'] as &$characteristic) {
                $characteristicScore = 0;
                foreach ($characteristic['subcharacteristics'] as &$subcharacteristic) {
                    $subcharacteristicScore = 0;
                    $metricCount = 0;
                    foreach ($subcharacteristic["metrics"] as &$metric) {
                        if (array_key_exists(0, $metric['metric_deliverables'])) {
                        //if(!is_null($metric['metric_deliverables'])) {
                            $metricCount++;
                            $subcharacteristicScore += $metric['metric_deliverables'][0]['current_value'];
                        }
                    }
                    if($metricCount != 0)
                    {
                        $subcharacteristicScore = $subcharacteristicScore / $metricCount;
                    }
                    $characteristicScore += $subcharacteristicScore;
                }
                if( count($characteristic['subcharacteristics']) >0)
                {   
                    $characteristicScore = $characteristicScore / count($characteristic['subcharacteristics']);
                }
                $qualityScore += $characteristicScore;
                $characteristic['score'] = $characteristicScore;
            }
            $quality['score'] = 0;
            if(count($quality['characteristics'])>0){
                $quality['score'] = $qualityScore / count($quality['characteristics']);
            }
        }
        //return $qualities;
        if (!is_null($project)) {
            return view('project.show', ['project' => $project, 'qualities' => $qualities]);
        } else {
            return redirect('/dashboard')->with('error', 'Proyecto no Encontrado');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
