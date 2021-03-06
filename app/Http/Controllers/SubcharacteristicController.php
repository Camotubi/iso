<?php

namespace App\Http\Controllers;

use App\Subcharacteristic;
use Illuminate\Http\Request;

class SubcharacteristicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $parentid = $request->input('parent');
      $subcharacteristic = Subcharacteristic::where('characteristic_id', $parentid)->get();
      return $subcharacteristic;
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
     * @param  \App\Subcharacteristic  $subcharacteristic
     * @return \Illuminate\Http\Response
     */
    public function show(Subcharacteristic $subcharacteristic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcharacteristic  $subcharacteristic
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcharacteristic $subcharacteristic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcharacteristic  $subcharacteristic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcharacteristic $subcharacteristic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcharacteristic  $subcharacteristic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcharacteristic $subcharacteristic)
    {
        //
    }
}
