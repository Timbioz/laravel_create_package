<?php

$namespace = "Timbioz\Helper\Http\Controllers";

Route::group( [
    "namespace" => $namespace,
    "prefix"     => "helper"
], function () {
    Route::get( "/", "HelperController@index");
} );


