<?php

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

Route::get('address-by-crime/{id}', function ($crm_cd) {
    return (new App\Http\Controllers\API\CrimedataController)->addressByCrime($crm_cd);
});

Route::get('number-of-crimes-by-area/{id}', function ($area) {
    return (new App\Http\Controllers\API\CrimedataController)->numberCrimesByArea($area);
});

Route::get('number-of-crimes-by-crime/{id}', function ($crm_cd) {
    return (new App\Http\Controllers\API\CrimedataController)->numberCrimesByCrime($crm_cd);
});
