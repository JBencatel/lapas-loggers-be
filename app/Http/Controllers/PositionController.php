<?php

namespace App\Http\Controllers;

use App\Http\Resources\Position as PositionResource;
use App\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positions = Position::paginate(10);

        return PositionResource::collection($positions);
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
        $position = $request->isMethod('put') ? Position::findOrFail($request->id) : new Position;

        $position->id = $request->input('id');
        $position->code = $request->input('code');
        $position->slope = $request->input('slope');
        $position->orientation = $request->input('orientation');
        $position->shore_id = $request->input('shore_id');
        $position->shore_level_id = $request->input('shore_level_id');
        $position->shore_exposure_id = $request->input('shore_exposure_id');
        $position->shore_replicate = $request->input('shore_replicate');
        $position->shore_subreplicate = $request->input('shore_subreplicate');
        $position->microhabitat_id = $request->input('microhabitat_id');
        $position->deployment_date = $request->input('deployment_date');
        $position->termination_date = $request->input('termination_date');
        $position->inactive = $request->input('inactive');
        $position->old_number = $request->input('old_number');

        if ($position->save()) {
            return new PositionResource($position);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $position = Position::findOrFail($id);

        return new PositionResource($position);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function edit(Position $position)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Position $position)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $position = Position::findOrFail($id);

        if ($position->delete()) {
            return new PositionResource($position);
        }
    }
}
