<?php

$namespace = "Timbioz\Helper\Controllers";

Route::group( [
    "namespace" => $namespace,
    "prefix"     => "helper"
], function () {
    Route::get( "/", "HelperController@index");
} );


