<?php

use Illuminate\Support\Facades\Route;

Route::group(["namespace" => "Kodemesin\Catbox\Http\Controllers"], function (){
    Route::get("catbox", "CatController@index");
});
