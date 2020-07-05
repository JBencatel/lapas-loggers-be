<?php

namespace App\Http\Controllers;

use App\Http\Resources\Serial as SerialResource;
use App\Serial;
use Illuminate\Http\Request;

class SerialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serials = Serial::all();

        return SerialResource::collection($serials);
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
        $serial = $request->isMethod('put') ? Serial::findOrFail($request->id) : new Serial;

        $serial->id = $request->input('id');
        $serial->name = $request->input('name');
        $serial->original_name = $request->input('original_name');
        $serial->position_id = $request->input('position_id');
        $serial->logger_type_id = $request->input('logger_type_id');
        $serial->deployment_date = $request->input('deployment_date');
        $serial->termination_date = $request->input('termination_date');
        $serial->inactive = $request->input('inactive');

        if ($serial->save()) {
            return new SerialResource($serial);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Serial  $serial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $serial = Serial::findOrFail($id);

        return new SerialResource($serial);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Serial  $serial
     * @return \Illuminate\Http\Response
     */
    public function edit(Serial $serial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Serial  $serial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serial $serial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Serial  $serial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serial = Serial::findOrFail($id);

        if ($serial->delete()) {
            return new SerialResource($serial);
        }
    }
}
