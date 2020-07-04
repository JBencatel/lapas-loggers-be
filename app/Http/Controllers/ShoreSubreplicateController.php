<?php

namespace App\Http\Controllers;

use App\Http\Resources\ShoreSubreplicate as ShoreSubreplicateResource;
use App\ShoreSubreplicate;
use Illuminate\Http\Request;

class ShoreSubreplicateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoreSubreplicates = ShoreSubreplicate::all();

        return ShoreSubreplicateResource::collection($shoreSubreplicates);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShoreSubreplicate  $shoreSubreplicate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shoreSubreplicate = ShoreSubreplicate::findOrFail($id);

        return new ShoreSubreplicateResource($shoreSubreplicate);
    }
}
