<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoreReplicate;
use App\Http\Resources\ShoreReplicate as ShoreReplicateResource;

class ShoreReplicateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoreReplicates = ShoreReplicate::all();

        return ShoreReplicateResource::collection($shoreReplicates);
    }
}
