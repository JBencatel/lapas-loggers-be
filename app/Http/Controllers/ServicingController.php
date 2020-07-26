<?php

namespace App\Http\Controllers;

use App\Http\Resources\Servicing as ServicingResource;
use App\Servicing;
use Illuminate\Http\Request;

class ServicingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicings = Servicing::all();

        foreach($servicings as $servicing) {
            $servicing->setAppends(['participants'])->toArray();
        }

        return ServicingResource::collection($servicings);
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
        $servicing = $request->isMethod('put') ? Servicing::findOrFail($request->id) : new Servicing;

        $servicing->id = $request->input('id');
        $servicing->date = $request->input('date');
        $servicing->shore_id = $request->input('shore_id');
        $servicing->notes = $request->input('notes');

        if ($servicing->save()) {
            $participants = $request->input('participants');
            if ($participants !== null)
            {
                $servicing->participants()->sync($participants);
            }
            
            return new ServicingResource($servicing);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servicing  $servicing
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicing = Servicing::findOrFail($id);

        return new ServicingResource($servicing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicing  $servicing
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicing $servicing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicing  $servicing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicing $servicing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicing  $servicing
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicing = Servicing::findOrFail($id);

        if ($servicing->delete()) {
            return new ServicingResource($servicing);
        }
    }
}
