<?php

namespace App\Http\Controllers;

use App\Http\Resources\ShoreExposure as ShoreExposureResource;
use App\ShoreExposure;
use Illuminate\Http\Request;

class ShoreExposureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoreExposures = ShoreExposure::all();

        return ShoreExposureResource::collection($shoreExposures);
    }
}
