<?php

namespace App\Http\Controllers;

use App\QualityAttribute;
use Illuminate\Http\Request;

class QualityAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return QualityAttribute::all();
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
     * @param  \App\QualityAttribute  $qualityAttribute
     * @return \Illuminate\Http\Response
     */
    public function show(QualityAttribute $qualityAttribute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QualityAttribute  $qualityAttribute
     * @return \Illuminate\Http\Response
     */
    public function edit(QualityAttribute $qualityAttribute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QualityAttribute  $qualityAttribute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QualityAttribute $qualityAttribute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QualityAttribute  $qualityAttribute
     * @return \Illuminate\Http\Response
     */
    public function destroy(QualityAttribute $qualityAttribute)
    {
        //
    }
}
