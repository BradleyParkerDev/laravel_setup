<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $heading = 'Laravel Setup';
    return view('pages/home',['heading'=> $heading ]);
    
});
