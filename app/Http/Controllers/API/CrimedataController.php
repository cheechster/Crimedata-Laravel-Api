<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CrimedataCollection;
use App\Http\Resources\CrimedataResource;
use App\Models\Crimedata;
use Illuminate\Http\Request;

class CrimedataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return CrimedataCollection|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function index()
    {
//        $projects = Crimedata::all();
//        $crimedatas = Crimedata::take(100)->get();
//        $crimedatas = Crimedata::where('crm_cd', 110);
//        return response(['crimedatas' => CrimedataResource::collection($crimedatas), 'message' => 'Retrieved successfully'], 200);
//        return new CrimedataCollection((new \App\Models\Crimedata)->$crimedatas);
        $data = Crimedata::where('crm_cd', '110')->paginate(100);
        return response($data, 200);
//        return view('phonetables',compact('data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @param $crm_cd
     * @return CrimedataCollection|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function crimeCode($crm_cd)
    {
//        return Crimedata::where('crm_cd', 110)->paginate(5));
//        $crimedatas = Crimedata::paginate(5);
//        return new CrimedataCollection(\App\Models\Crimedata::paginate(2));
        $data = Crimedata::where('crm_cd', $crm_cd)->paginate(100);
        return response($data);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Crimedata $crimedata
     * @return \Illuminate\Http\Response
     */
    public function show(Crimedata $crimedata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Crimedata $crimedata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crimedata $crimedata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Crimedata $crimedata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crimedata $crimedata)
    {
        //
    }
}
