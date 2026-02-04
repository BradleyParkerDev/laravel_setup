<?php

namespace App\Http\Controllers;

class WebController extends Controller
{
    public function homePage()
    {
        $heading = 'Laravel Setup';
        return view('pages/home', ['heading' => $heading]);
    }
}
