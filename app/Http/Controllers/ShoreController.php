<?php

namespace App\Http\Controllers;

use App\Http\Resources\Shore as ShoreResource;
use App\Shore;
use Illuminate\Http\Request;

class ShoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shores = Shore::all();

        return ShoreResource::collection($shores);
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
        $shore = $request->isMethod('put') ? Shore::findOrFail($request->id) : new Shore;

        $shore->id = $request->input('id');
        $shore->name = $request->input('name');
        $shore->code = $request->input('code');
        $shore->country_id = $request->input('country_id');
        $shore->fwunit_id = $request->input('fwunit_id');
        $shore->latitude = $request->input('latitude');
        $shore->longitude = $request->input('longitude');

        if ($shore->save()) {
            return new Shore($shore);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shore  $shore
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shore = Shore::findOrFail($id);

        return new ShoreResource($shore);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shore  $shore
     * @return \Illuminate\Http\Response
     */
    public function edit(Shore $shore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shore  $shore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shore $shore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shore  $shore
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shore = Shore::findOrFail($id);

        if ($shore->delete()) {
            return new ShoreResource($shore);
        }
    }
}
