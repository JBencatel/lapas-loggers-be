<?php

namespace App\Http\Controllers;

use App\FieldWorkUnit;
use App\Http\Resources\FieldWorkUnit as FieldWorkUnitResource;
use Illuminate\Http\Request;

class FieldWorkUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fieldWorkUnits = FieldWorkUnit::all();

        return FieldWorkUnitResource::collection($fieldWorkUnits);
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
        $fieldWorkUnit = $request->isMethod('put') ? FieldWorkUnit::findOrFail($request->id) : new FieldWorkUnit;

        $fieldWorkUnit->id = $request->input('id');
        $fieldWorkUnit->name = $request->input('name');

        if ($fieldWorkUnit->save()) {
            return new FieldWorkUnitResource($fieldWorkUnit);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FieldWorkUnit  $fieldWorkUnit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fieldWorkUnit = FieldWorkUnit::findOrFail($id);

        return new FieldWorkUnitResource($fieldWorkUnit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FieldWorkUnit  $fieldWorkUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(FieldWorkUnit $fieldWorkUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FieldWorkUnit  $fieldWorkUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FieldWorkUnit $fieldWorkUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FieldWorkUnit  $fieldWorkUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fieldWorkUnit = FieldWorkUnit::findOrFail($id);

        if ($fieldWorkUnit->delete()) {
            return new FieldWorkUnitResource($fieldWorkUnit);
        }
    }
}
