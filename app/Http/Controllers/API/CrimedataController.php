<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CrimedataCollection;
use App\Models\Crimedata;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

class CrimedataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return CrimedataCollection|Application|ResponseFactory|Response
     */
    public function index()
    {
        $data = Crimedata::where('crm_cd', '110')->paginate(100);
        return response($data, 200);
    }

    /**
     * Response with a listing of location data based on crime from user input.
     *
     * @param $crm_cd
     * @return CrimedataCollection|Application|ResponseFactory|Response
     */
    public function addressByCrime($crm_cd)
    {
        $data = Crimedata::where('crm_cd', $crm_cd)->paginate(100, ['LOCATION', 'cross_street', 'lat', 'lon']);
        return response($data);
    }

    /**
     * Response with a listing of location data based on crime from user input.
     *
     * @param $area
     * @return CrimedataCollection|Application|ResponseFactory|Response
     */
    public function numberCrimesByArea($area)
    {
        $data = Crimedata::where('area', $area)->count();
        return response($data);
    }

}
