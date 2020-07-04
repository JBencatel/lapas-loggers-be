<?php

namespace App\Http\Controllers;

use App\Http\Resources\Microhabitat as MicrohabitatResource;
use App\Microhabitat;
use Illuminate\Http\Request;

class MicrohabitatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $microhabitats = Microhabitat::all();

        return MicrohabitatResource::collection($microhabitats);
    }
}
