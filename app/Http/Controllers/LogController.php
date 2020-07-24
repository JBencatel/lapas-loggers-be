<?php

namespace App\Http\Controllers;

use App\Http\Resources\Log as LogResource;
use App\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logs = Log::all();

        return LogResource::collection($logs);
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
        $log = $request->isMethod('put') ? Log::findOrFail($request->id) : new Log;

        if($request->hasFile('log_file')) {
            $filenameWithExt = $request->file('log_file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('log_file')->getClientOriginalExtension();
            $filenameToStore = $$filename . "_" . time() . "_" . $extension;
            $path = $request->file('log_file')->storeAs('public/log_files', $filenameToStore);
        }

        $log->id = $request->input('id');
        $log->serial_id = $request->input('serial_id');
        $log->servicing_id = $request->input('servicing_id');
        if($request->hasFile('log_file')) {
            $log->log_file = $filenameToStore;
        }
        $log->off_sync = $request->input('off_sync');

        if ($log->save()) {
            return new LogResource($log);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $log = Log::findOrFail($id);

        return new LogResource($log);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function edit(Log $log)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Log $log)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $log = Log::findOrFail($id);

        Storage::delete(['public/log_files/' . $log->log_file]);

        if ($log->delete()) {
            return new LogResource($log);
        }
    }
}
