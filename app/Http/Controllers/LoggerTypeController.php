<?php

namespace App\Http\Controllers;

use App\Http\Resources\LoggerType as LoggerTypeResource;
use App\LoggerType;
use Illuminate\Http\Request;

class LoggerTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loggerTypes = LoggerType::all();

        return LoggerTypeResource::collection($loggerTypes);
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
        $loggerType = $request->isMethod('put') ? LoggerType::findOrFail($request->id) : new LoggerType;

        $loggerType->id = $request->input('id');
        $loggerType->name = $request->input('name');

        if ($loggerType->save()) {
            return new LoggerTypeResource($loggerType);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LoggerType  $loggerType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $loggerType = LoggerType::findOrFail($id);

        return new LoggerTypeResource($loggerType);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LoggerType  $loggerType
     * @return \Illuminate\Http\Response
     */
    public function edit(LoggerType $loggerType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LoggerType  $loggerType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoggerType $loggerType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LoggerType  $loggerType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loggerType = LoggerType::findOrFail($id);

        if ($loggerType->delete()) {
            return new LoggerTypeResource($loggerType);
        }
    }
}
