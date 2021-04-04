<?php

use App\Http\Controllers\API\CrimedataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//Route::get('all', function() {
//    // If the Content-Type and Accept headers are set to 'application/json',
//    // this will return a JSON structure. This will be cleaned up later.
//    return (new App\Http\Controllers\API\CrimedataController)->index();
//});

Route::get('crime', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return (new App\Http\Controllers\API\CrimedataController)->index();
});

//return all crimes, paginated
//Route::get('crime', function () {
//    return new \App\Http\Resources\CrimedataCollection(\App\Models\Crimedata::paginate(100));
//});

Route::get('crime/{crm_cd}', function($crm_cd) {
    return (new App\Http\Controllers\API\CrimedataController)->crimeCode($crm_cd);
//    return new \App\Http\Resources\CrimedataCollection(\App\Models\Crimedata::paginate(100));
});
