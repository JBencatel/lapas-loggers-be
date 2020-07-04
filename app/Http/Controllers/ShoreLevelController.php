<?php

namespace App\Http\Controllers;

use App\Http\Resources\ShoreLevel as ShoreLevelResource;
use App\ShoreLevel;
use Illuminate\Http\Request;

class ShoreLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoreLevels = ShoreLevel::all();

        return ShoreLevelResource::collection($shoreLevels);
    }
}
